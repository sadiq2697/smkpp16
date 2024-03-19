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

    <title>Pentadbir</title>
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
                <h3>Pentadbir</h3>
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
$alumini_corner=query("SELECT * FROM pentadbir");
foreach($alumini_corner-> rows as $rows)
{
?>
                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                            <figure>
                                <img src="images/pentadbir/<?php echo $rows['image'] ?>" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;"><?php echo $rows['designation'] ?></span>
                                <h5 style="text-align:center;"><a href="#"><?php echo $rows['name'] ?></a></h5>
                                
                                <ul>
                                    <li style="text-align:center;"><i class="fa fa-envelope-o"></i><?php echo $rows['details'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                     <?php } ?>


<!--                     <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                           <figure>
                                <img src="extra-images/hasni.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">PENOLONG KANAN</span>
                                <h5 style="text-align:center;"><a href="#">CIKGU HASNI BT ZAKARIA </a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>pk@smkpp16.edu.my</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                             <figure>
                                <img src="extra-images/maziranew.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">PK HAL EHWAL MURID</span>
                                <h5 style="text-align:center;"><a href="#">CIKGU MAZIRA BINTI MOHD ZAIN</a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>pkhem@smkpp16.edu.my</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                            <figure>
                                <img src="extra-images/aznita.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">PK KOKURIKULUM</span>
                                <h5 style="text-align:center;"><a href="#">CIKGU AZNITA BINTI SAARI</a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>pkkoku@smkpp16.edu.my</li>
                                </ul>
                            </div>
                        </div>
                    </div>



<div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                            <figure>
                                <img src="extra-images/nikaida.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">GKMP SAINS & MATEMATIK</span>
                                <h5 style="text-align:center;"><a href="#">CIKGU NIK AIDA BINTI NIK YUSOF</a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>nikaida@smkpp16.edu.my </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                            <figure>
                                <img src="extra-images/dewi.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">GKMP BAHASA</span>
 <h5 style="text-align:center;"><a href="#">CIKGU DEWI SUHAIZA BINTI ABD HAMID</a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>dewi@smkpp16.edu.my  </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                            <figure>
                                <img src="extra-images/norliyah.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">GKMP KEMANUSIAAN</span>
                                <h5 style="text-align:center;"><a href="#">CIKGU NORLIYAH BT ALI</a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>norliyah@smkpp16.edu.my </li>
                                </ul>
                            </div>s
                        </div>
                    </div>



                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                            <figure>
                                <img src="extra-images/zaiton.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">GKMP TEKNIK & VOKASIONAL</span>
                                <h5 style="text-align:center;"><a href="#">CIKGU ZAITON BT ZAKARIA@RAMLI</a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>zaiton@smkpp16.edu.my </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                            <figure>
                                <img src="extra-images/suriani.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">KAUNSELOR</span>
                                <h5 style="text-align:center;"><a href="#"> CIKGU SURIANI BINTI YUSOFF</a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>suriani@smkpp16.edu.my </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap mb">
                            <figure>
                                <img src="extra-images/julia.jpg" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;">KAUNSELOR</span>
                                <h5 style="text-align:center;"><a href="#">CIKGU JULIA ROSTILA BINTI JUSOH</a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i>julia@smkpp16.edu.my </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->


    
        


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
