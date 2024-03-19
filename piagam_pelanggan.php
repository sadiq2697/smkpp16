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

    <title>Piagam Pelanggan</title>
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
                <h3>Piagam Pelanggan</h3>
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
                            <h4 class="title">Piagam Pelanggan</h4>
                            <p style="color: #000;text-align: justify;">

 <?php 
                                $about_query=query("SELECT piagam_pelanggan from about_section");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["piagam_pelanggan"];
                                echo $content;
                                ?>
                                
<!-- Sekolah Menengah Kebangsaan Putrajaya Presint 16(1) menyediakan perkhidmatan terbaik berfokuskan perkembangan potensi murid yang dinamik dan holistik ke arah melahirkan sahsiah unggul dalam merealisasikan Falsafah Pendidikan Negara
<br><br>
<h4 class="title">MURID</h4>

 Memastikan setiap murid mendapat peluang pendidikan dan layanan sama rata serta berkualiti. 
<br>
Memastikan kemenjadian murid dari aspek kepimpinan, kerohanian dan sahsiah terpuji.
<br>
Memastikan murid mendapat kemahiran asas ICT setelah tamat persekolahan.
<br>
Mewujudkan peluang yang luas untuk perkembangan bakat dan potensi murid dalam bidang kokurikulum.
<br><br>
 <h4 class="title">GURU DAN STAF</h4>

Memastikan guru yang berkualiti dari segi peribadi, profesionalisme, pedagogi dan teknologi pendidikan ke arah mencapai kecemerlangan pendidikan abad ke - 21. 
Menjalankan tugas dengan berpandukan nilai dan etika dalam perkhidmatan awam dan Kementerian Pendidikan Malaysia.
<br><br>
<h4 class="title">IBU BAPA DAN KOMUNITI</h4>

Mewujudkan jalinan dan jaringan kerjasama serta hubungan mesra antara guru, ibu bapa dan komuniti melalui Persatuan Ibu bapa dan Guru (PIBG).
<br><br>
<h4 class="title">STAKEHOLDERS</h4>

Berusaha dan memberi sokongan terhadap program Jabatan Pendidikan WP Putrajaya (JPWPP) dan Kementerian Pendidikan Malaysia (KPM).
<br>
Sentiasa mematuhi dan akur terhadap tugas dan arahan JPWPP, KPM dan bertindak dalam masa yang ditetapkan.
Berusahha meningkatkan imej sekolah sebagai SEKOLAH TRANSFORMASI dan SEKOLAH LESTARI STEM yang cemerlang dari kaca mata dunia pendidikan khasnya dan peringkat global amnya. -->

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
