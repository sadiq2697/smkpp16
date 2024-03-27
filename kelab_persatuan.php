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

    <title>Kelab & Persatuan</title>
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
                <h3>Kelab & Persatuan</h3>
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
                            <h4 class="title">PENASIHAT PERSATUAN DAN KELAB TAHUN 2021</h4>
                             
                            <p style="color: #000;text-align: justify;">

                                <?php 
                                $about_query=query("SELECT kelab_persatuan from kokurikulum");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["kelab_persatuan"];
                                echo $content;
                                ?> 

<!-- <h6 style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="text-decoration: underline;"><span style="font-size: 15px; color: #000; line-height: 107%;">Persatuan Bahasa Melayu</span></span><b><span style="font-size: 15px; color: #000; line-height: 107%;"> &nbsp;</span></b></h6>
<p style="font-size: 15px; color: #000;">Cg.&nbsp;Datin Naimah binti Ismail (K)</p>
<p style="font-size: 15px; color: #000;">Cg.&nbsp;Roslina binti Mat Junoh</p>
<h6 style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</h6>
<h6 style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Persatuan Bahasa Inggeris</span> &nbsp;</span></b><b style="font-size: 8.1472px;"><span style="font-size: 15px; color: #000; line-height: 107%;">&nbsp;</span></b></h6>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Rozaini binti Omar (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Sarina binti Hashim</span></p>
<h6 style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</h6>
<h6 style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="text-decoration: underline;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">Persatuan Sains dan Matematik</span></b></span></h6>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Sh. Fatimatul Zahrah bt. Syed Yusof (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Syariman bin Mansor</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Persatuan Sejarah dan Geografi</span>&nbsp;&nbsp;</span></b></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Norzita Azura binti Mohamad (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Teh Zaiton binti Puteh</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="text-decoration: underline;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">Persatuan Pendidikan Islam</span></b></span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Zubaidah binti Md Darani&nbsp;(K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Fatimah bt Muhammad Razaki</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="text-decoration-line: underline;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">Persatuan&nbsp;Bahasa Perancis&nbsp;</span></b></span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Rosmalizawati binti Safin (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Rosliza binti Ismail</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="text-decoration: underline;">&nbsp;<b><span style="font-size: 15px; color: #000; line-height: 107%;">Persatuan PSV</span></b></span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Nurul Syahida binti Hussin (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Harziana binti Baharom</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="text-decoration: underline;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">Kelab STEM-Inovasi</span></b></span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Norfaridatul Akmar binti Hashim (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Farizzah binti Mohd Razali</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Suvarmani a/l Subhan</span></p>
<h6 style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</h6>
<h6 style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab&nbsp;STEM-Digital</span>&nbsp;&nbsp;</span></b></h6>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Rasyidah binti Khamis (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Sihasmin binti Omar</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="text-decoration: underline;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">Kelab Alam Sekitar</span></b></span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Yati binti Abdul Razak (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg. Fadzlin binti Alias</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="text-decoration: underline;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">Kelab Koperasi, Keusahawanan &amp; Kepenggunaan</span></b></span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Noriha binti Hussin (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Noorafizan binti A. Rashid</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab STEM-Robotik</span> &nbsp;</span></b><b style="font-size: 8.1472px;"><span style="font-size: 15px; color: #000; line-height: 107%;">&nbsp;</span></b></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg. Nur Syazana binti Daud (K)&nbsp;</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Nisuhaina binti Abdullah Sani&nbsp;</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Nur Haifa binti Ismail</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab Seni Kreatif &amp; Drama</span>&nbsp;&nbsp;</span></b></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.Fadzlina binti A. Manap</span><span style="font-size: 15px; color: #000;">i&nbsp;(K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Noraihan binti Abd Wahab</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="font-size: 15px; color: #000;"><span style="text-decoration: underline;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">Kelab&nbsp;Rukun Negara</span></b></span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Hasiah binti Kassim (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Hasliza binti Talib</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">&nbsp;</span></b></p>
<h6 style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab Videografi, Fotografi &amp; Kewartawanan</span></span></b></h6>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Rosli bin Mohd Noor&nbsp;(K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.&nbsp;Zarina binti Darman</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg. Faniza binti Ibrahim</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg. Noor Akmaniah binti Arwae</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;<span style="text-decoration: underline;"><b><span style="font-size: 15px; color: #000; line-height: 107%;">Kelab&nbsp;SPBT</span></b></span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Noraziawati binti Mustafa (K)</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">Cg.&nbsp;Norafni Sunarti binti Hamid</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab&nbsp;Kerjaya &amp; Digital</span>&nbsp;&nbsp;</span></b></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">Cg.Suriani binti Yusoff (K)</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Julia Rostila binti Jusoh</span></p>
<p style="font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab&nbsp;Dr. Muda</span>&nbsp;</span></b></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">Cg.Noorhazira binti Ismail@Hassan (K)</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Siti Nurwani binti Zakaria</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab&nbsp;Junior Chef</span>&nbsp;</span></b></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">Cg.Suria Suraini binti Kamal (K)</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;Cg.Imran bin Husin</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab&nbsp;KKQ</span>&nbsp;</span></b></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">Cg. Syuhaida binti Mamat Budin (K)</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><span style="font-size: 15px; color: #000;">Cg.</span><span style="font-size: 15px; color: #000;">&nbsp;Mariam binti Mertadza</span></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">&nbsp;</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;"><b><span style="font-size: 15px; color: #000; line-height: 107%;"><span style="text-decoration: underline;">Kelab&nbsp;Pencegahan Jenayah (HEM)</span>&nbsp;&nbsp;</span></b></p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">Cg.&nbsp;Mohd Zulfadhli bin Arba'ee&nbsp;(K)</p>
<p style="margin-bottom: .0001pt;font-size: 15px; color: #000;">Cg. Zuraini binti Zaidin</p>   <span class="hits"><i class="icon-signal"></i>
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
