<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/LOGOSMKPP16.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Contact</title>
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
                <h3>Hubungi</h3>
               
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <section class="gt_c_bg">
            <!--Contact Info Wrap Start-->
            <div class="container">
                <div class="gt_contact_info_outer_wrap">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap" style="background: #2980b9;">
                                <i class="fa fa-map-marker" style="color:#fff;"></i>
                                <h5 style="color:#fff;">Alamat</h5>
                                <p style="color:#fff;">Jalan P16G, Presint 16 62150 Putrajaya Wilayah Persekutuan Putrajaya</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap active" style="background: #2980b9;">
                                <i class="fa fa-phone" style="color:#fff;"></i>
                                <h5 style="color:#fff;">Telefon nombor</h5>
                                <p style="color: #fff;"> <b>Tel : </b>6(03) 8888 0248
                                    <br>

<b>Fax :</b> 6(03) 8888 5144
<br><br>
</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gt_contact_info_element_wrap" style="background: #2980b9;">
                                <i class="fa fa-envelope-o" style="color:#fff;"></i>
                                <h5 style="color:#fff;">Alamat Email</h5>
                                <a href="#" style="color:#fff;">pengetua@smkpp16.edu.my<br><br><br></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Contact Info Wrap End-->

            <!--Map Wrap Start-->
            <div class="default_width">
             <!--   <div class="map-canvas gt_contact_us_map" id="map-canvas"></div> -->
                <!--Map Wrap End-->
                <div class="">
                    <div class="gt_hdg_1">
                        <h3>HANTAR KAMI PESAN</h3>
                    </div>
                    <form class="gt_contact_form" id="contact-form" action="" method="post">
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Nama Anda" id="name" name="contact-name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Emel Anda" id="email" name="contact-email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gt_contact_us_field">
                                <input class="c_ph" type="text" placeholder="Telefon Nombor" id="subject" name="contact-subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="gt_contact_us_field">
                                <textarea class="gt_c_bg" name="contact-message" id="message" placeholder="Mesej" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="gt_contact_us_field">
                                <input id="submit-message" type="submit" value="Hantar" name="submit_msg" style="background:#008dd2;color: #fff;border: none;">
                            </div>
                            <!--Alert Message-->
                            <div id="contact-result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->

<?php include('footer.php'); ?>

</div>
<!--gt Wrapper End-->



    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!--Map JavaScript-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk" type="text/javascript"></script>
    <!--Filter able JavaScript-->
    <script src="js/jquery-filterable.js"></script>
    <!--Contact Form Validation JavaScript-->
    <script src="js/pluginse209.js"></script>
    <!--Custom JavaScript-->
    <script src="js/custom.js"></script>

  </body>

</html>
