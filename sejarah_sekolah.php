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

    <title>Sejarah Sekolah</title>
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
                <h3>Sejarah Sekolah</h3>
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
                            <h4 class="title">Mengenai Sekolah Menengah Kebangsaan Putrajaya Presint 16(1)</h4>
                             <img src="images/school.jpg">
                             <br><br>
                            <p style="color: #000;text-align: justify;">

                                <?php 
                                $about_query=query("SELECT about from about_section");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["about"];
                                echo $content;
                                ?>
                                
<!-- Sekolah Menengah Kebangsaan Putrajaya Presint 16(1) terletak di Presint 16, Wilayah Persekutuan Putrajaya. Pada awalnya sekolah ini diberi nama SMK Putrajaya 3 kerana ia merupakan sekolah menengah ke-3 di Wilayah Persekutuan Putrajaya. Sekolah ini memulakan operasi pada tanggal 6 Januari 2003. Lokasi sekolah ini terletak di kawasan Pusat Pentadbiran Putrajaya. Keluasan SMK Putrajaya 3 ialah kira-kira 12.5 hektar dan mempunyai 6 blok utama iaitu Blok A (Blok Menara Jam), Blok B (Blok Pentadbiran), Blok C (Blok Bilik Darjah), Blok D (Bengkel), Blok E (Pavilion), Blok F (Dewan) dan Blok G (Surau).
<br><br>
       

           Pengetua pertama sekolah ini ialah Cik Rusnani bt Mohd Sirin yang mula menjalankan tugas pada 16 September 2003 hingga September 2005. Pengetua kedua yang bertugas di sekolah ini mulai 19 Ogos 2005 hingga 06 April 2015 ialah Tuan Haji Mohd Yusof bin Hassan. Tuan Hj. Mohd. Yusof b Hassan telah ditawarkan jawatan Pengarah Pejabat Pelajaran Wilayah Persekutuan Putrajaya mulai 16 Januari 2008 dan kembali semula ke sekolah ini pada 3 April 2008 dengan jawatan Pengetua Cemerlang DG 52 yang berkuatkuasa mulai 16 Feb 2008. Pengetua ketiga yang melaporkan diri pada 22 April 2015 ialah Encik Ab Aziz Bin Mamat.

  <br><br>

          Pada tahun pertama beroperasi, sekolah ini hanya mempunyai 145 orang murid. Murid yang terlibat ialah murid Tingkatan satu (3 buah kelas) dan Tingkatan 2 (3 buah kelas). Murid-murid ini datangnya dari sekolah di sekitar Wilayah Persekutuan Putrajaya seperti dari SK Putrajaya 1 (SK  Putrajaya Presint 8(1) dan SK Putrajaya 3 (SK Putrajaya Presint 16(1). Sekolah juga menerima murid yang berpindah mengikut keluarga yang baru berpindah ke Wilayah Persekutuan Putrajaya. Bilangan guru pada tahun tersebut adalah seramai 25 orang dan staf sokongan seramai 7 orang. Kelas tingkatan 4 bermula pada tahun 2004 dengan bilangan murid seramai 69 orang. Terdapat dua kelas sains dan teknologi dan satu kelas sastera. Bilangan kelas telah bertambah dari tahun ke tahun kerana pertambahan bilangan murid. Pada tahun 2010 terdapat 18 kelas Tingkatan 1 hingga Tingkatan 3 dan 12 kelas bagi Tingkatan 4 dan Tingkatan 5. Pada tahun 2017 bilangan keseluruhan kelas adalah sebanyak 33 buah kelas dengan bilangan murid berjumlah 854 orang dan bilangan guru 78 orang.
<br><br>
        Kelas Aliran Agama (KAA) diperkenalkan pada tahun 2010 kepada murid Tingkatan 1 dan kelas MPV (Pemprosesan Makanan) untuk murid Tingkatan 4. Murid sulung aliran agama ialah seramai 20 orang manakala kelas MPV seramai 22 orang. Pada masa sekarang, sekolah ini juga menawarkan kelas  KAA untuk murid-murid tingkatan 4 dan tingkatan 5.

        <br><br>       

       Nama sekolah telah diubah secara rasmi kepada Sekolah Menengah Kebangsaan Putrajaya Presint 16(1) mulai 10 Oktober 2007 di bawah pentadbiran Pejabat Pelajaran Wilayah Persekutuan Putrajaya (PPWPP). Di bawah kepimpinan cemerlang Tn. Hj. Mohd Yusof bin Hassan dan kerjasama yang padu daripada semua pihak. Pada tahun 2015, sekolah ini telah dipilih bersama-sama 99 buah sekolah dari seluruh Malaysia yang terlibat dengan Program Sekolah Transormasi (PreSTasi) kohort 1 yang sekarang ini lebih dikenali sebagai TS25.

  <br><br>

Diharapkan sekolah ini akan terus memacu kejayaan dalam pelbagai bidang dan mampu melonjakkan kecemerlangan sehingga ke peringkat dunia. --> 
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
