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

    <title>Sukan & Permainan</title>
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
                <h3>Sukan & Permainan</h3>
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
                            <h4 class="title">SUKAN DAN PERMAINAN TAHUN 2021</h4>
                             
                            <p style="color: #000;text-align: justify;">

                                 <?php 
                                $about_query=query("SELECT sukan_permainan from kokurikulum");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["sukan_permainan"];
                                echo $content;
                                ?> 
            


<!-- <table style="border: none; margin-left: 6.75pt; margin-right: 6.75pt; height: 929px;" width="335" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.65pt;"><strong><span style="font-size: 15px; color: #000;">&nbsp;Kelab Bola Sepak</span></strong></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.65pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Syariman bin Mansor (K)</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.65pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Nur Haifa binti Ismail&nbsp;</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.65pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Muhammad Fahmi bin Zawawi</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.65pt;"><span style="font-size: 15px; color: #000;">&nbsp;</span></p>
<p style="margin-bottom: .0001pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly;"><b><span style="font-size: 8.5pt; font-family: 'Arial',sans-serif;">&nbsp;</span></b></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<p style="text-indent: 22.75pt; line-height: normal; tab-stops: -5.4pt; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;Kelab Bola Jaring</span></b></p>
<p style="text-indent: 22.75pt; line-height: normal; tab-stops: -5.4pt; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Nor Amirah bin Radzi (K)</span></p>
<p style="text-indent: 22.75pt; line-height: normal; tab-stops: -5.4pt; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Harziana binti Baharom</span></p>
<p style="text-indent: 22.75pt; line-height: normal; tab-stops: -5.4pt; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg. Nur Amalina binti Abd Manap</span></p>
<p style="text-indent: 22.75pt; line-height: normal; tab-stops: -5.4pt; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;">&nbsp;</p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;</span></b></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;Kelab Badminton</span></b></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg. Noor Marina binti Abdullah (K)</span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Fadzlin binti Alias</span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-family: Arial, sans-serif;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Syuhaida binti Mamat Budin</span></span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;">&nbsp;</p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;</span></b></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;Kelab Bola Tampar</span></b></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg. Suvarmani a/l Subhan&nbsp;</span><span style="font-size: 15px; color: #000;">(K)</span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Teh Zaiton binti Puteh</span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Norzita Azura binti Mohamad</span></p>
<p style="margin-bottom: .0001pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly;"><b><span style="font-size: 8.5pt; font-family: 'Arial',sans-serif;">&nbsp;</span></b></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding-top: 0cm; padding-right: 5.4pt; padding-bottom: 0cm;" valign="top" width="358"><strong><span style="font-size: 15px; color: #000;">&nbsp;Kelab Hoki</span></strong>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp; &nbsp;</span></b><span style="font-size: 15px; color: #000;">Cg</span><span style="font-size: 15px; color: #000;"><span style="font-size: 10pt;">. Noor Akmaniah binti Arwae</span>&nbsp; (K)</span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;</span></b><span style="font-size: 15px; color: #000;">&nbsp;&nbsp;Cg.&nbsp;Faniza binti Ibrahim</span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000;">&nbsp; &nbsp;</span><span style="font-size: 15px; color: #000;">Cg</span><span style="font-size: 15px; color: #000;">.&nbsp;Mahazira binti Ab Rahman</span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;">&nbsp;</p>
<p style="margin-bottom: .0001pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly;"><span style="font-size: 8.5pt; font-family: 'Arial',sans-serif;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<p style="text-indent: -.25pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.4pt;"><strong><span style="font-size: 15px; color: #000;">&nbsp;Kelab Ping Pong</span></strong></p>
<p style="text-indent: -.25pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.4pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg. Mohd&nbsp;Reduan bin Mahmood (K)</span></p>
<p style="text-indent: -.25pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.4pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Noriha binti Hussin</span></p>
<p style="text-indent: -.25pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.4pt;"><span style="font-size: 15px; color: #000; text-indent: -0.25pt;">&nbsp;Cg.&nbsp;Rosliza binti Ismail</span></p>
<p style="text-indent: -.25pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -5.4pt;">&nbsp;</p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;</span></b></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><strong><span style="font-size: 15px; color: #000;">&nbsp;Kelab Boling</span></strong></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Noraihan binti Abdul Wahab&nbsp;(K)</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Nurul Fathiah binti Mohd Nasir</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Sihasmin binti Omar</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;Kelab Sepak Takraw</span></b></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000; mso-fareast-font-family: 'Times New Roman'; color: black; mso-ansi-language: EN-US;">&nbsp;Cg.&nbsp;Muhammad Fahmi bin Zawawi&nbsp;(K)</span></p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><span style="font-size: 15px; color: #000; mso-fareast-font-family: 'Times New Roman'; color: black; mso-ansi-language: EN-US;">&nbsp;Cg. Siti Zamrah binti Shahalun</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Mohd Faizudin bin Abdullah Bokhari</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;">&nbsp;</p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;">&nbsp;</p>
<p style="text-indent: 22.75pt; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -28.15pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;</span></b></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<h6 style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;Kelab Catur &amp; Permainan Dalaman</span></b></h6>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Hasliza binti Talib (K)</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Vijayarani a/p Soorinarayanan</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Fadzlina binti A. Manap</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;">&nbsp;</p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;</span></b></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<h6 style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;Kelab Olahraga</span></b></h6>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Khairussani bin Othman (K)</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Yusmira binti Yusof</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Mohd Zulfadhli bin Arba'ee</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;">&nbsp;</p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<h6 style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><b><span style="font-size: 15px; color: #000;">&nbsp;</span></b><b style="font-size: 11px;"><span style="font-size: 15px; color: #000;">Kelab&nbsp;Bola Baling</span></b></h6>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;</span><span style="font-size: 15px; color: #000;">Cg.&nbsp;Idales binti Abdol Seman&nbsp;(K)</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Suriani binti Yusoff</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Dhanesh a/l Madhavan</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<h6 style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><b><span style="font-size: 15px; color: #000;">Kelab&nbsp;Memanah</span></b></h6>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Fatimah binti Muhammad Razaki&nbsp;(K)</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Abdul Razak bin Mohd Nawi</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Sarina binti Hashim</span></p>
</td>
</tr>
<tr>
<td style="width: 268.45pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="358">
<h6 style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><b><span style="font-size: 15px; color: #000;">Kelab&nbsp;Petanque</span></b></h6>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Norafni Sunarti binti Hamid&nbsp;(K)</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Hasiah binti Kassim</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; color: #000;">&nbsp;Cg.&nbsp;Nor Mariana binti Sabudin</span></p>
<p style="line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: -2.5pt; mso-height-rule: exactly; margin: 0cm 0cm .0001pt -4.0pt;">&nbsp;</p>
</td>
</tr>
</tbody>
</table> -->





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
