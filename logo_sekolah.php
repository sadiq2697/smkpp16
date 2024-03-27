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

    <title>Logo Sekolah</title>
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
                <h3>Logo Sekolah</h3>
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
                            <h4 class="title" style="">KETERANGAN LOGO</h4>
                            <img src="images/LOGOSMKPP16.png">
                            <p style="color: #000;text-align: justify;">

                                 <?php 
                                $about_query=query("SELECT logo_sekolah from about_section");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["logo_sekolah"];
                                echo $content;
                                ?>

<!-- <br>
<h4 class="title">WARNA BIRU</h4>
Keharmonian dan perpaduan dalam kalangan warga sekolah serta antara sekolah dengan masyarakat setempat
 
<br><br>
<h4 class="title">WARNA EMAS</h4>
Kemurnian matlamat dan hasil pendidikan yang ingin diperolehi oleh sekolah
 <br><br>
<h4 class="title">WARNA KUNING</h4>
Masyarakat yang berdaulat di bawah naungan Yang Dipertuan Agong dan institusi Raja-raja
 <br><br>
<h4 class="title">WARNA HITAM</h4>
Kejelasan misi & visi yang ingin dicapai
<br><br> 
<h4 class="title">LOGO MSC</h4>
Penggunaan teknologi (ICT) dalam proses pengajaran & pembelajaran
 <br><br>
<h4 class="title">4 HELAIAN BUKU</h4>
Jasmani, Emosi, Rohani, Intelek yang perlu dipupuk dan disuburkan.
 <br><br>
<h4 class="title">BUKU</h4>
Sekolah sebagai gedung ilmu pengetahuan
 <br><br>
<h4 class="title">2 PECAHAN BULATAN</h4>
Kerjasama, toleransi, persepakatan yang erat antara sekolah dan ibu bapa
 <br><br>
<h4 class="title">BULATAN</h4>
Penyediaan & penghasilan pelajar untuk cabaran globalisasi
 <br><br>
<h4 class="title">BUMI</h4>
Pengaplikasian ilmu bagi menghasilkan teknologi untuk memakmurkan umat secara global -->

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
