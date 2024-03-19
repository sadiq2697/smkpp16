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

    <title>Guru</title>
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
                <h3>Guru</h3>
                           </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">

                <section>
            <div class="container">
                <div class="row">
                    <?php
$guru=query("SELECT * FROM guru");
foreach($guru-> rows as $rows)
{
?>

                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                              <figure>
                                <img src="images/guru/<?php echo $rows['image'] ?>" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;"><?php echo $rows['designation'] ?></span>
                                <h5 style="text-align:center;"><a href="#"><?php echo $rows['name'] ?></a></h5>
                                
                                <ul>
                                    <li style="font-size: 13px;text-align: center;"><i class="fa fa-envelope-o"></i><?php echo $rows['details'] ?></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php } ?>



                </div>
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
