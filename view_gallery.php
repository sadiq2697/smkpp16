<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kid Template for Children and child.">
    <meta name="keywords" content="child,children,school,childcare,colorful">
    <meta name="author" content="2goodtheme">

    <title>Anjung Galeri</title>
	<link rel="shortcut icon" href="images/favicon.png">
    <!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>

  <body>

<?php include('header.php'); ?>

    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3>Anjung Galeri</h3>
              
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <!--Gallery Wrap Start-->
        <section class="gt_gallery_filter_bg">
            <div class="container">
                <div class="row">
             <!--        <ul id="filterable-item-filter-1">
                        <li class="active"><a data-value="all">All</a></li>
                        <li><a data-value="1">Activites</a></li>
                        <li><a data-value="2">Courses</a></li>
                        <li><a data-value="3">Classes</a></li>
                        <li><a data-value="4">Learing Space</a></li>
                    </ul> -->


<?php
$mem_id = base64_decode($_GET["id"]);
$dir = base64_decode($_GET["dr"]);
$query = query("SELECT `gal_id`, `gal_img_name`, `gal_alb_cover` FROM `gallery` WHERE gal_alb_id='$mem_id'");
$num = $query->num_rows;
                    foreach($query->rows as $rows)
                    {
                        $gal_img_name = $rows["gal_img_name"];
                        $ext = pathinfo($gal_img_name,PATHINFO_EXTENSION);
                    ?>
                       
                         <div id="filterable-item-holder-1" class="row">
                        <div class="filterable-item all 1 col-md-3 col-sm-6 col-xs-12">
                            <a href="images/<?php echo $dir?>/<?php echo $gal_img_name?>" data-rel="prettyPhoto">
                            <div class="edu_masonery_thumb">
                                <figure>
        <img src="images/<?php echo $dir?>/<?php echo $gal_img_name?>" alt="" style="width: 400px;height: 250px;" />
                                    <!-- <i class="fa fa-search"></i> -->
                                </figure>
                            </div>  </a>
                        </div>

                    <?php
                    }
                    ?>


                  





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
