<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kid Template for Children and child.">
    <meta name="keywords" content="child,children,school,childcare,colorful">
    <meta name="author" content="2goodtheme">

    <title>Galeri</title>
	<link rel="shortcut icon" href="images/favicon.png">
    <!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">



<style type="text/css">


#main #gallery .gallery-item {
  height: 300px;
}
#main #gallery .gallery-item .album {
  position: relative;
  width: 80%;
  margin: auto;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
#main #gallery .gallery-item .album img {
  width: 100%;
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  border: 4px solid #FFF;
  -moz-box-shadow: 0 0 4px black;
  -webkit-box-shadow: 0 0 4px black;
  box-shadow: 0 0 4px black;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -moz-transition: all 1s;
  -o-transition: all 1s;
  -webkit-transition: all 1s;
  transition: all 1s;
  -moz-transform-origin: 50% 50% 50%;
  -ms-transform-origin: 50% 50% 50%;
  -webkit-transform-origin: 50% 50% 50%;
  transform-origin: 50% 50% 50%;
}
#main #gallery .gallery-item .album img:first-child {
  position: relative;
  z-index: 1000;
}
#main #gallery .gallery-item .album img:first-child + img {
  -moz-transform: rotate(-4deg);
  -ms-transform: rotate(-4deg);
  -webkit-transform: rotate(-4deg);
  transform: rotate(-4deg);
}
#main #gallery .gallery-item .album img:last-child {
  -moz-transform: rotate(4deg);
  -ms-transform: rotate(4deg);
  -webkit-transform: rotate(4deg);
  transform: rotate(4deg);
}
#main #gallery .gallery-item .album:hover {
  width: 85%;
}
#main #gallery .gallery-item .album:hover img {
  z-index: 2000;
}
#main #gallery .gallery-item .album:hover img:first-child {
  z-index: 3000;
}
#main #gallery .gallery-item .album:hover img:first-child + img {
  left: -40px;
  -moz-transform: rotate(-10deg);
  -ms-transform: rotate(-10deg);
  -webkit-transform: rotate(-10deg);
  transform: rotate(-10deg);
}
#main #gallery .gallery-item .album:hover img:last-child {
  left: 40px;
  -moz-transform: rotate(10deg);
  -ms-transform: rotate(10deg);
  -webkit-transform: rotate(10deg);
  transform: rotate(10deg);
}
#main #gallery .gallery-item p {
  width: 100%;
  text-align: center;
  color: #FFF;
  padding-top: 20px;
}

</style>

  </head>

  <body>

<?php include('header.php'); ?>

    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3>Galeri</h3>
              
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <!--Gallery Wrap Start-->
        <section class="gt_gallery_filter_bg" style="background: #036;">
            <div class="container">
                <div class="row">




<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/css/bootstrap.min.css" /> -->
<div id="main" class="container">
 
  <div id="gallery" class="row">
   

    <?php
                   $query = query("SELECT `alb_id`, gal_img_name,`alb_title` FROM `album` inner join gallery on alb_id=gal_alb_id WHERE `section_id`='2' group by alb_id");
                    foreach($query->rows as $rows)
                    {
                        $gal_img_name = $rows["gal_img_name"];
                        $ext = pathinfo($gal_img_name,PATHINFO_EXTENSION);
                    ?>

<a href="view_gallery.php?id=<?php echo base64_encode($rows["alb_id"])?>&dr=<?php echo base64_encode('gallery')?>">
    <div class="col-md-4 gallery-item">
      <div class="album">
        <img src="images/gallery/<?php echo $gal_img_name?>" alt="" />
        <img src="images/gallery/<?php echo $gal_img_name?>" alt="" />
        <img src="images/gallery/<?php echo $gal_img_name?>" alt="" />
      </div>
      <br>
       <h5 style="text-align: center;color: #fff !important;"><?php echo $rows["alb_title"]?></h5>
    </div>

</a>
  <?php
                    }
                    ?>


  </div>
</div>






             <!--        <ul id="filterable-item-filter-1">
                        <li class="active"><a data-value="all">All</a></li>
                        <li><a data-value="1">Activites</a></li>
                        <li><a data-value="2">Courses</a></li>
                        <li><a data-value="3">Classes</a></li>
                        <li><a data-value="4">Learing Space</a></li>
                    </ul> -->

                 <!--   
                   <?php
                   $query = query("SELECT `alb_id`, gal_img_name,`alb_title` FROM `album` inner join gallery on alb_id=gal_alb_id WHERE `section_id`='2' group by alb_id");
                    foreach($query->rows as $rows)
                    {
                        $gal_img_name = $rows["gal_img_name"];
                        $ext = pathinfo($gal_img_name,PATHINFO_EXTENSION);
                    ?>

                    <div class="col-md-4 col-sm-4">
                        <div class="gt_latest_course2_wrap default_width mb" style="border: 5px solid red;
border-radius: 10px;">
                            <figure>
                                <img src="images/gallery/<?php echo $gal_img_name?>" alt="" style="width: 500px;height: 200px;">
                              
                            </figure>
                           
                            <div class="gt_latest_course_des default_width" style="">
                         <h5 style="text-align: center;color: #fff !important;"><a href="view_gallery.php?id=<?php echo base64_encode($rows["alb_id"])?>&dr=<?php echo base64_encode('gallery')?>" style="text-align: center;color: #fff !important;"><?php echo $rows["alb_title"]?></a></h5>
                         <br>
                               
                          <center>
                                <div class="" style="width: 35%;color: #fff !important;text-align: center;background: #000;padding: 5px;">
         <a href="view_gallery.php?id=<?php echo base64_encode($rows["alb_id"])?>&dr=<?php echo base64_encode('gallery')?>" style="color: #fff;">View</a>
                                </div>
                               </center>
                            </div> 
                        </div>
                    </div>

  <?php
                    }
                    ?> -->

                    </div>
                </div>
            </div>
        </section>
        <!--Gallery Wrap End-->
    </div>
    <!--Main Content Wrap End-->

<?php include('footer.php'); ?>

    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!--Accordian JavaScript-->
    <script src="js/jquery.accordion.js"></script>
    <!--Count Down JavaScript-->
    <script src="js/jquery.downCount.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--Owl Carousel JavaScript-->
    <script src="js/owl.carousel.js"></script>
    <!--Number Count (Waypoint) JavaScript-->
    <script src="js/waypoints-min.js"></script>
    <!--Filter able JavaScript-->
    <script src="js/jquery-filterable.js"></script>
    <!--WOW JavaScript-->
    <script src="js/wow.min.js"></script>
    <!--Custom JavaScript-->
    <script src="js/custom.js"></script>

  </body>
</html>
