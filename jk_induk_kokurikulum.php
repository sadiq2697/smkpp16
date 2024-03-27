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

    <title>JK Induk Kokurikulum</title>
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
                <h3>JK Induk Kokurikulum</h3>
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
                        <div class="gt_about_wrap">
                            <h4 class="title">Pengurusan Induk Kokurikulum Tahun 2021</h4>
                             
                            <p style="color: #000;text-align: justify;">

                                 <?php 
                                $about_query=query("SELECT jk_induk_kokurikulum from kokurikulum");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["jk_induk_kokurikulum"];
                                echo $content;
                                ?> 
            
<!-- <p class="MsoNormal"><span style="font-size: 15px; color: #000;"><strong>Pengerusi</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Pengetua</span><br> <span style="font-size: 15px; color: #000;"><strong>Naib Pengerusi&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp; : Penolong Kanan Kokurikulum</span><br> <span style="font-size: 15px; color: #000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Penolong Kanan Pentadbiran</span><br> <span style="font-size: 15px; color: #000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Penolong Kanan HEM</span></p>
<p class="MsoNormal"><strong style="font-size: 15px; color: #000;">Setiausaha &nbsp;</strong><span style="font-size: 15px; color: #000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;Cg. Rafisah binti Abd Rashid</span><br> <span style="font-size: 15px; color: #000;"><strong>Pen. Setiausaha &nbsp;</strong>&nbsp; :&nbsp;Cg.&nbsp;Noor Akmaniah binti Arwae</span></p>
<p class="MsoNormal"><strong><span style="font-size: 15px; color: #000;">Ahli-ahli :</span></strong></p>
<p class="MsoNormal"><span style="font-size: 15px; color: #000;">Setiausaha Sukan&nbsp; &nbsp; &nbsp; &nbsp;: Cg. Khairussani bin Othman</span><br><span style="font-size: 15px; color: #000;">Setiausaha 1M1S<strong>&nbsp;</strong>&nbsp; &nbsp; &nbsp; &nbsp;: Cg. Muhammad Afikie bin Azmi</span><br><span style="font-size: 15px; color: #000;">Setiausaha Koperasi&nbsp; &nbsp;: Cg. Nor Mariana binti Sabudin</span><br><span style="font-size: 15px; color: #000;">Setiausaha Majalah&nbsp; &nbsp; &nbsp;: Cg. Rozaini binti Omar</span></p>
<p class="MsoNormal"><span style="font-size: 15px; color: #000;">&nbsp;</span><br> <strong><span style="font-size: 15px; color: #000;">Penyelaras Pasukan Badan Beruniform</span></strong><br> <span style="font-size: 15px; color: #000;">(Cg. Suhaida binti Subran)</span><br> <span style="font-size: 15px; color: #000;"><strong>Penyelaras Kelab dan Persatuan</strong> </span><br> <span style="font-size: 15px; color: #000;">(Cg. Noorafizan binti A.Rashid) </span><br> <strong><span style="font-size: 15px; color: #000;">Penyelaras Kelab Sukan dan Permainan</span></strong><br> <span style="font-size: 15px; color: #000;">(Cg. Vijayarani a/p Soorinarayanan)</span><br> <span style="font-size: 15px; color: #000;">&nbsp;</span><br> <strong><span style="font-size: 15px; color: #000;">Penyelaras&nbsp;1M1S</span></strong><br> <span style="font-size: 15px; color: #000;">(Cg. Muhamad Afikie bin Azmi)</span><br> <strong><span style="font-size: 15px; color: #000;">Penyelaras Kejohanan Sukan Olahraga</span></strong><br> <span style="font-size: 15px; color: #000;">(Cg. Khairussani bin Othman)</span><br> <strong><span style="font-size: 15px; color: #000;">Jurulatih Pasukan Elit Sekolah</span></strong><br> <span style="font-size: 15px; color: #000;">(Cg. Mohd Zulfadhli bin Arba'ee &amp; Cg. Syariman bin Mansor)</span><br> <span style="font-size: 15px; color: #000;">&nbsp;</span><br><span style="font-size: 15px; color: #000;"><strong>Penyelaras Kios Jujur</strong></span><br style="font-size: 13.68px;"><span style="font-size: 15px; color: #000;">Cg. Noor Akmaniah binti Arwae (K)&nbsp; &nbsp;&nbsp;&nbsp;</span><br style="font-size: 13.68px;"><span style="font-size: 15px; color: #000;">Cg. Siti Nurwani binti Zakaria&nbsp;&nbsp;&nbsp;</span><br style="font-size: 13.68px;"><span style="font-size: 15px; color: #000;">Cg. Nurhasimah binti Omar&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><br style="font-size: 13.68px;"><span style="font-size: 15px; color: #000;">Cg. Nur Syazana binti Daud</span></p>
<p class="MsoNormal"><span style="font-size: 15px; color: #000;"><strong>Ketua-ketua Rumah Sukan:</strong></span><br> <span style="font-size: 15px; color: #000;">&nbsp;Marikh&nbsp;&nbsp;&nbsp; : Cg. Sh. Fatimatul Zahrah binti Sy. Yusof</span><span style="font-size: 15px; color: #000;">&nbsp; &nbsp; &nbsp;</span><br> <span style="font-size: 15px; color: #000;">&nbsp;Uranus&nbsp;&nbsp; :&nbsp;Cg. Norfaridatul Akmar binti Hasim&nbsp;&nbsp;</span><br> <span style="font-size: 15px; color: #000;">&nbsp;Neptune :&nbsp;Cg. Nisuhaina binti Abdullah Sani &nbsp; &nbsp; &nbsp;&nbsp;</span><br> <span style="font-size: 15px; color: #000;">&nbsp;Zuhrah&nbsp;&nbsp; :&nbsp;Cg. Noorhazira binti Ismail@Hassan</span><br> <span style="font-size: 15px; color: #000;">&nbsp;</span><br> <strong><span style="font-size: 15px; color: #000;">Ketua-ketua:</span></strong><br> <span style="font-size: 15px; color: #000;">Pasukan Badan Beruniform</span><br> <span style="font-size: 15px; color: #000;">Persatuan dan Kelab</span><br> <span style="font-size: 15px; color: #000;">Kelab Sukan dan Permainan</span><br> <span style="font-size: 15px; color: #000;">Penyelaras Koakademik</span><br> <span style="font-size: 15px; color: #000;">Semua GKMP</span></p>  <span class="hits"><i class="icon-signal"></i>
</span> -->





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
