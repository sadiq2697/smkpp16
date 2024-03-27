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

    <title>Lagu Sekolah</title>
    <!-- Progress Bar CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="css/style.css" rel="stylesheet">
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
                <h3>Lagu Sekolah</h3>
                           </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <!--About Us Wrap Start-->
        <section class="gt_about_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="gt_about_wrap" style="color: #000;">
                            <!-- <h4 class="title">Lagu Sekolah</h4> -->
                            <p style="color: #000;text-align: justify;">

                                <?php 
                                $about_query=query("SELECT lagu_sekolah from about_section");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["lagu_sekolah"];
                                echo $content;
                                ?>
                                
<!-- <b>SEKOLAHKU TERCINTA</b>

 <br><br>

SMK PP ENAM BELAS SATU
<br><br>
MEMBINA GENERASI ALAF BARU
<br><br>
BERDIRI MEGAH DISINARI CAHAYA
<br><br>
LAHIR INSAN BERILMU BERIMAN BERJAYA

 
<br><br>
<b>KORUS</b>

 <br><br>

BERWAWASAN BERILMU BERBAKTI
<br><br>
ITULAH TERAS UNGGUL PEGANGAN KAMI
<br><br>
MENJUNJUNG MEGAH ASPIRASI NEGARA
<br><br>
SETIA MEMBELA NUSA DAN BANGSA
<br><br>
 

SMK PP ENAM BELAS SATU
<br><br>
MEMBINA GENERASI ALAF BARU
<br><br>
WARGA BERSATU HATI BERSEMANGAT WAJA
<br><br>
MAJULAH SEKOLAH KU SEKOLAH TERCINTA -->


                            </p>
                           

                        </div>
                    </div>
                     <div class="col-md-4">
                       

                 
                 <?php include('sidebar.php'); ?>
                            
                    </div> 
                </div>
            </div>
        </section>
        <!--About Us Wrap End-->

      
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
