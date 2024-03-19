<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/LOGOSMKPP16.png">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Berita Sekolah</title>
    <!-- Progress Bar CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>

  <body>

<!--gt Wrapper Start-->  
<div class="gt_wrapper">

       <?php include('header.php'); ?>

    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3>Berita Sekolah</h3>
                           </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
       

       <section class="gt_news_bg">
            <div class="container">
                <!--Main Heading Wrap Start-->
                <div class="gt_hdg_1">
                    <h3>Pengumuman Sekolah</h3>
                   
                    <span><img src="images/hdg-01.png" alt=""></span>
                </div>
                <!--Main Heading Wrap End-->

                <!--Latest News Wrap Start-->
                <div class="row">
                   
                   <?php
                          $blog_query=query("SELECT * FROM blog");
                          foreach($blog_query->rows as $rows)
                          {
                            
                          ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="gt_blog_wrap">
                            <figure>
                                <img src="images/blog/thumb/<?php echo $rows['image'] ?>" alt="">
                               
                            </figure>
                            <div class="gt_blog_des_wrap">
                               <?php 
    $news_title = strip_tags($rows['title']);
    $snews_title = substr($news_title,0,30);
?>
                                <h5><a href="notice_details.php?id=<?php echo $rows['blog_id'] ?>"><?php echo $snews_title ?>......</a></h5>
                                <p>
                                    <?php 
    $news = strip_tags($rows['description']);
    $snews = substr($news,0,70);
?>
                                <?php  echo $snews; ?>.....
                                 </p>
                                <a href="notice_details.php?id=<?php echo $rows['blog_id'] ?>" style="background-color: #008dd2;color: #fff;border: none;width: 117px;padding: 10px;">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                        <?php
                        }
                        ?>


                   
                   
                </div>
                <!--Latest News Wrap End-->


            </div>
        </section>


      
<?php include('footer.php'); ?>

</div>
<!--gt Wrapper End-->



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
