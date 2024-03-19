<?php
function resize($source_image, $destination, $tn_w, $tn_h, $quality = 100, $wmsource = false)
{
    $info = getimagesize($source_image);
    $imgtype = image_type_to_mime_type($info[2]);

    #assuming the mime type is correct
    switch ($imgtype) {
        case 'image/jpeg':
            $source = imagecreatefromjpeg($source_image);
            break;
        case 'image/gif':
            $source = imagecreatefromgif($source_image);
            break;
        case 'image/png':
            $source = imagecreatefrompng($source_image);
            break;
        default:
            die('Invalid image type.');
    }

    #Figure out the dimensions of the image and the dimensions of the desired thumbnail
    $src_w = imagesx($source);
    $src_h = imagesy($source);


    #Do some math to figure out which way we'll need to crop the image
    #to get it proportional to the new size, then crop or adjust as needed

    $x_ratio = $tn_w / $src_w;
    $y_ratio = $tn_h / $src_h;

    if (($src_w <= $tn_w) && ($src_h <= $tn_h)) {
        $new_w = $src_w;
        $new_h = $src_h;
    } elseif (($x_ratio * $src_h) < $tn_h) {
        $new_h = ceil($x_ratio * $src_h);
        $new_w = $tn_w;
    } else {
        $new_w = ceil($y_ratio * $src_w);
        $new_h = $tn_h;
    }

    $newpic = imagecreatetruecolor(round($new_w), round($new_h));
    imagecopyresampled($newpic, $source, 0, 0, 0, 0, $new_w, $new_h, $src_w, $src_h);
    $final = imagecreatetruecolor($tn_w, $tn_h);
    $backgroundColor = imagecolorallocate( 255, 255, 255,$final);
    imagefill($final, 0, 0, $backgroundColor);
    //imagecopyresampled($final, $newpic, 0, 0, ($x_mid - ($tn_w / 2)), ($y_mid - ($tn_h / 2)), $tn_w, $tn_h, $tn_w, $tn_h);
    imagecopy($final, $newpic, (($tn_w - $new_w)/ 2), (($tn_h - $new_h) / 2), 0, 0, $new_w, $new_h);

    #if we need to add a watermark
    if ($wmsource) {
        #find out what type of image the watermark is
        $info    = getimagesize($wmsource);
        $imgtype = image_type_to_mime_type($info[2]);

        #assuming the mime type is correct
        switch ($imgtype) {
            case 'image/jpeg':
                $watermark = imagecreatefromjpeg($wmsource);
                break;
            case 'image/gif':
                $watermark = imagecreatefromgif($wmsource);
                break;
            case 'image/png':
                $watermark = imagecreatefrompng($wmsource);
                break;
            default:
                die('Invalid watermark type.');
        }

        #if we're adding a watermark, figure out the size of the watermark
        #and then place the watermark image on the bottom right of the image
        $wm_w = imagesx($watermark);
        $wm_h = imagesy($watermark);
        imagecopy($final, $watermark, $tn_w - $wm_w, $tn_h - $wm_h, 0, 0, $tn_w, $tn_h);

    }
    if (imagejpeg($final, $destination, $quality)) {
        return true;
    }
    return false;
}
function thumbnail_box($filename,$img, $box_w, $box_h) {
    //create the image, of the required size
	$img = imagecreatefromjpeg($img);
    $new = imagecreatetruecolor($box_w, $box_h);
    if($new === false) {
        //creation failed -- probably not enough memory
        return null;
    }


    //Fill the image with a light grey color
    //(this will be visible in the padding around the image,
    //if the aspect ratios of the image and the thumbnail do not match)
    //Replace this with any color you want, or comment it out for black.
    //I used grey for testing =)
    $fill = imagecolorallocate($new, 255, 255, 255);
    imagefill($new, 2, 2, $fill);

    //compute resize ratio
    $hratio = $box_h / imagesy($img);
    $wratio = $box_w / imagesx($img);
    $ratio = min($hratio, $wratio);

    //if the source is smaller than the thumbnail size, 
    //don't resize -- add a margin instead
    //(that is, dont magnify images)
    if($ratio > 1.0)
        $ratio = 1.0;

    //compute sizes
    $sy = floor(imagesy($img) * $ratio);
    $sx = floor(imagesx($img) * $ratio);

    //compute margins
    //Using these margins centers the image in the thumbnail.
    //If you always want the image to the top left, 
    //set both of these to 0
    $m_y = floor(($box_h - $sy) / 2);
    $m_x = floor(($box_w - $sx) / 2);

    //Copy the image data, and resample
    //
    //If you want a fast and ugly thumbnail,
    //replace imagecopyresampled with imagecopyresized
    if(!imagecopyresized($new, $img,
        $m_x, $m_y, //dest x, y (margins)
        0, 0, //src x, y (0,0 means top left)
        $sx, $sy,//dest w, h (resample to this size (computed above)
        imagesx($img), imagesy($img)) //src w, h (the full size of the original)
    ) {
        //copy failed
        imagedestroy($new);
        return null;
    }
    //copy successful
    imagejpeg($new,$filename);
	//$thumb = thumbnail_box("../../../assets/images/venues/thumb/$file_name",$image, 400, 400);
}
function thumb_crop($filename,$img,$w,$h)
{
	/*
		 * Crop-to-fit PHP-GD
		 * http://salman-w.blogspot.com/2009/04/crop-to-fit-image-using-aspphp.html
		 *
		 * Resize and center crop an arbitrary size image to fixed width and height
		 * e.g. convert a large portrait/landscape image to a small square thumbnail
		 */

		$source_path = $img;

		/*
		 * Add file validation code here
		 */

		list($source_width, $source_height, $source_type) = getimagesize($source_path);

		switch ($source_type) {
			case IMAGETYPE_GIF:
				$source_gdim = imagecreatefromgif($source_path);
				break;
			case IMAGETYPE_JPEG:
				$source_gdim = imagecreatefromjpeg($source_path);
				break;
			case IMAGETYPE_PNG:
				$source_gdim = imagecreatefrompng($source_path);
				break;
		}

		$source_aspect_ratio = $source_width / $source_height;
		$desired_aspect_ratio = $w / $h;

		if ($source_aspect_ratio > $desired_aspect_ratio) {
			/*
			 * Triggered when source image is wider
			 */
			$temp_height = $h;
			$temp_width = ( int ) ($h * $source_aspect_ratio);
		} else {
			/*
			 * Triggered otherwise (i.e. source image is similar or taller)
			 */
			$temp_width = $w;
			$temp_height = ( int ) ($w / $source_aspect_ratio);
		}

		/*
		 * Resize the image into a temporary GD image
		 */

		$temp_gdim = imagecreatetruecolor($temp_width, $temp_height);
		imagecopyresampled(
			$temp_gdim,
			$source_gdim,
			0, 0,
			0, 0,
			$temp_width, $temp_height,
			$source_width, $source_height
		);

		/*
		 * Copy cropped region from temporary image into the desired GD image
		 */

		$x0 = ($temp_width - $w) / 2;
		$y0 = ($temp_height - $h) / 2;
		$desired_gdim = imagecreatetruecolor($w, $h);
		imagecopy(
			$desired_gdim,
			$temp_gdim,
			0, 0,
			$x0, $y0,
			$w, $h
		);

		/*
		 * Render the image
		 * Alternatively, you can save the image in file-system or database
		 */

		imagejpeg($desired_gdim,$filename);

		/*
		 * Add clean-up code here
		 */
		 //$thumbcrop = thumb_crop("../../../assets/images/venues/thumb/$file_name",$image,400,400);
}
?>