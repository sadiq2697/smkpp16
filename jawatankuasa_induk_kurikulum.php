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

    <title>JK Induk Kurikulum</title>
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
                <h3>JK Induk Kurikulum</h3>
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
                            <h4 class="title">JK Induk Kurikulum</h4>
                            <p style="color: #000;text-align: justify;">

                                 <?php 
                                $about_query=query("SELECT jawatankuasa_induk_kurikulum from akademik");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["jawatankuasa_induk_kurikulum"];
                                echo $content;
                                ?> 
                                

                                <!-- <table class="table">
<tbody>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; mso-border-alt: solid black .5pt; background: #008dd2; mso-background-themecolor: accent4; mso-background-themetint: 153; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p style="tab-stops: 4.0cm; margin: 6.0pt 0cm 6.0pt 0cm;"><strong><span style="font-size: 15px; line-height: 107%; color:#fff;">JAWATANKUASA</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p><strong><span style="font-size: 15px; line-height: 107%;color:#000;">PENGURUSAN KURIKULUM</span></strong></p>
<table class="MsoNormalTable" style="border-collapse: collapse; mso-table-layout-alt: fixed; mso-yfti-tbllook: 1024; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pengerusi</span></p>
</td>
<td style="width: 147.55pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="197">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Pengetua</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Naib Pengerusi</span></p>
</td>
<td style="width: 147.55pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="197">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan Pentadbiran</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan HEM</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan Kokurikulum</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha</span></p>
</td>
<td style="width: 147.55pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="197">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">:&nbsp;Cg. Rahani binti Ibrahim</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Ahli - ahli</span></p>
</td>
<td style="width: 147.55pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="197">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Semua GKMP</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Guru Cemerlang</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Ketua-ketua Panitia</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penyelaras Mata pelajaran</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Setiausaha Peperiksaan</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Setiausaha Kecemerlangan</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Setiausaha Jadual Waktu</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Guru Perpustakaan dan Media</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Guru Bimbingan dan Kaunseling</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;"><strong><span style="font-size: 15px; line-height: 107%;color:#000;">PENGURUSAN PANITIA</span></strong></p>
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<table class="MsoNormalTable" style="border-collapse: collapse; border: none; height: 510px;" border="1" width="340" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Bahasa Melayu</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Noraihan </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Abd. Wahab</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Bahasa Inggeris</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Faniza binti Ibrahim</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Sains</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Fadzlina </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> A. Manap</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Matematik</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Siti Nurwani binti Zakaria</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pendidikan Islam</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Fatimah bt Muhammad Razaki</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pendidikan Moral</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Vijayarani a/p Soonirayanan</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Sejarah</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Hasliza </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Talib</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Geografi</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Sihasmin </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Omar</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">RBT</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Farizzah </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Mohd Razali</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Fizik</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Noorhazira </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Ismail@Hassan</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Biologi</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Fadzlin binti Alias</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Kimia</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Sh. Fatimatul Zahrah S.Yusof</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Mate.Tambahan</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Idales </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Abdol Seman</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Prinsip Akaun</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Noriha binti Hussin</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Ekonomi </span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Mahazira binti Ab Rahman</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Perniagaan</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Noramirah binti Radzi</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Sains Komputer</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Rasyidah binti Khamis</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Asas Sains Komputer</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Mohd Zulfadli bin Arba'ee</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Tasawwur Islam</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Mariam binti Mertadza</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">PSI</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Mohd Faizudin bin Abdullah&nbsp; &nbsp; &nbsp; &nbsp; </span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp; Bokhairi</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">PQS</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Zubaidah </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Md Darani</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Bahasa Arab</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Norzita Azura binti Mohamad</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Bahasa Perancis</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Rosmalizawati binti Safin</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">PSV</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg.&nbsp;Harziana binti Baharom</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">PJK</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;">MPV</p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">:&nbsp;Cg. Khairussani binti Othman</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">:&nbsp;Cg</span>. Imran bin Husin</p>
</td>
</tr>
</tbody>
</table>
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;"><strong><span style="font-size: 15px; line-height: 107%;color:#000;">PUSAT SUMBER SEKOLAH</span></strong></p>
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;"><b><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></b></p>
<table class="MsoNormalTable" style="border-collapse: collapse; mso-table-layout-alt: fixed; border: none; mso-yfti-tbllook: 1024; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-border-insideh: cell-none; mso-border-insidev: cell-none;" border="1" width="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pengerusi</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Pengetua</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Naib Pengerusi</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan Pentadbiran</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyelaras</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">(GPM)</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Abd Razak bin Mohd Nawi&nbsp;</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp; </span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;"><span style="font-size: 15px;">: Cg. Mahazira binti Ab Rahman</span>&nbsp;</span>&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;">&nbsp;</p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">NILAM</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Makmal Komputer</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pengawas PSS</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p>&nbsp;</p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span>:Cg. Yusmira binti Yusof</p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">:&nbsp;Cg. Sihasmin binti Omar</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">:&nbsp;Cg. Nur Syazana binti Daud</span></p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; background: #008dd2; mso-background-themecolor: accent4; mso-background-themetint: 153; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p style="tab-stops: 4.0cm; margin: 6.0pt 0cm 6.0pt 0cm;"><strong><span style="font-size: 15px; line-height: 107%; color: #fff;">JAWATANKUASA</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p><strong><span style="font-size: 15px; line-height: 107%;color:#000;">PEPERIKSAAN, PENILAIAN BERASASKAN SEKOLAH (PBS), HEADCOUNT, DAN GROW</span></strong></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<table class="MsoNormalTable" style="border-collapse: collapse; mso-table-layout-alt: fixed; border: none; mso-yfti-tbllook: 1024; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-border-insideh: cell-none; mso-border-insidev: cell-none;" border="1" width="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pengerusi</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Pengetua</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Naib Pengerusi</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan Pentadbiran</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan HEM</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan Kokurikulum</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Zaiton binti Zakaria</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyelaras</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Hasiah binti Kassim&nbsp;</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pep. Dalaman</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha SPM</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyelaras PBS </span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">(Menengah Atas) </span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">SU ULBS BM</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">SU ULBS BI</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Bahasa&nbsp; Arab</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Peka &amp; Amali Sains</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.4pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha Kurikulum</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha PB T3</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penolong SU PB T3 Penyelaras PBS (Menengah Rendah)</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;">&nbsp;</p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">SEGAK</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">PAJSK</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">PPSi</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">GROW</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Headcount &amp;TOV</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Fadzlin </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Alias</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Nisuhaina </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Abdullah Sani </span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Noormarina binti Hj. Abdullah</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Rosliza binti Ismail</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Dhanesh a/l Madhavan</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Norzita Azura binti Mohamad</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Fadzlina </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> A. Manap</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Rahani binti Ibrahim</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Suria Suraini </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Kamal</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Suhaida&nbsp;</span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;Subran</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Suria Suraini&nbsp;</span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;Kamal</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Nuru Fathiah binti Mohd Nasir</span></p>
<p>&nbsp;</p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Khairussani bin Othman</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Rafisah binti Abd Rashid</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Suriani binti Yusoff</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp; Pn. Julia Rostila </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp; Jusoh</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">:&nbsp;</span>Semua KP/ Penyelaras mata</p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;&nbsp;pelajaran</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p><b><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></b><strong><span style="font-size: 15px; line-height: 107%;color:#000;">PEMANTAUAN DAN PENYELIAAN&nbsp;</span></strong></p>
<table class="MsoNormalTable" style="border-collapse: collapse; mso-table-layout-alt: fixed; mso-yfti-tbllook: 1024; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="0" cellspacing="0" cellpadding="0">
<tbody>
<tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes; height: 13.5pt;">
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 13.5pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pementoran</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pemantauan</span></p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 13.5pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: GKMP Kemanusiaan&nbsp;</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: GKMP Bahasa</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyelarasan</span></p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: GKMP Teknik Vokasional</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pengesanan</span></p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;"><span style="text-indent: 30.3333px;color:#000;">&nbsp;GKMP Sains dan Matematik</span></span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">AJK</span></p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Ketua Panitia</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Guru Ce</span><span style="font-size: 15px; line-height: 107%;color:#000;">merlang</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Jurulatih Utama</span></span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Semua Pentaksir Sekolah</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; background: #008dd2; mso-background-themecolor: accent4; mso-background-themetint: 153; padding: 0cm 5.4pt 0cm 5.4pt;" width="347">
<p style="tab-stops: 4.0cm; margin: 6.0pt 0cm 6.0pt 0cm;"><strong><span style="font-size: 15px; line-height: 107%; color: #fff;">JAWATANKUASA</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p><strong><span style="font-size: 15px; line-height: 107%;color:#000;">JADUAL WAKTU</span></strong></p>
<table class="MsoNormalTable" style="border-collapse: collapse; mso-table-layout-alt: fixed; mso-yfti-tbllook: 1024; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;" border="0" width="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pengerusi</span></p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Pengetua</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Naib Pengerusi</span></p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan Pentadbiran</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyelaras</span></p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Norliyah </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Ali</span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;">&nbsp;</p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Noorafizan </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> A. Rashid</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">:&nbsp;Cg. SurianSuriani binti Kamal</span></span></p>
</td>
</tr>
<tr>
<td style="width: 86.75pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyedia Relief</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Isnin</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Selasa</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Rabu</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Khamis</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span>Jumaat</p>
</td>
<td style="width: 162.8pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p>&nbsp;</p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Sihasmin </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Omar </span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Rahani </span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;"> Ibrahim</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Nik Aida binti Nik Yusuf</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Suria Suriani binti Kamal</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Norliyah binti Ali</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Hasliza binti Talib</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Dewi Suhaiza binti Abd. Hamid</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Teh Zaiton binti Puteh</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Zaiton binti Zakaria@Ramli</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Noorafizan binti A Rashid</span></p>
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
</td>
</tr>
</tbody>
</table>
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width: 248.1pt; border: solid black 1.0pt; border-top: none; mso-border-top-alt: solid black .5pt; mso-border-alt: solid black .5pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="347">
<p><strong><span style="font-size: 15px; line-height: 107%;color:#000;">PENTAKSIRAN DAN PEPERIKSAAN SERTA&nbsp;</span></strong><strong><span style="font-size: 15px; line-height: 107%;color:#000;">PENJAMINAN KUALITI&nbsp;</span></strong><strong><span style="font-size: 15px; line-height: 107%;color:#000;">PENTAKSIRAN BERASASKAN SEKOLAH</span></strong></p>
<table class="MsoNormalTable" style="border-collapse: collapse; mso-table-layout-alt: fixed; border: none; mso-yfti-tbllook: 1024; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-border-insideh: cell-none; mso-border-insidev: cell-none;" border="1" width="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pengerusi</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Pengetua</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 1; mso-yfti-lastrow: yes; height: 169.45pt;">
<td style="width: 86.75pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 169.45pt;" valign="top" width="116">
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Naib Pengerusi </span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyelaras Pep.</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Dalaman</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha SPM</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyelaras Penyelarasan PBS</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">(Menengah Atas)</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">SU ULBS BM</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">SU ULBS BI&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Bahasa&nbsp;</span>Arab</p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Peka &amp; Amali Sains</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Setiausaha PBT3</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Pen. Setiausaha PBT3</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">Penyelaras PBS</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;">(Men Rendah)</p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">SEGAK</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">PAJSK</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">PPSi</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm -5.15pt .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">GROW</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px;">Headcount &amp;TOV</span>&nbsp;</p>
<p style="margin-bottom: .0001pt; tab-stops: 4.0cm;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="tab-stops: 4.0cm; margin: 0cm 0cm .0001pt -4.0pt;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
</td>
<td style="width: 162.8pt; border: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 169.45pt;" valign="top" width="217">
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Penolong Kanan Pentadbiran</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: </span><span style="font-size: 15px; line-height: 107%; color:#000;">Penolong Kanan H</span><span style="font-size: 15px; line-height: 107%;color:#000;">EM </span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: </span><span style="font-size: 15px; line-height: 107%; color:#000;">Penolong Kanan Ko</span><span style="font-size: 15px; line-height: 107%;color:#000;">kurikulum</span>&nbsp;</p>
<p>&nbsp;</p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Zaiton binti Zakaria</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Hasiah binti Kassim</span></p>
<p><span style="font-size: 15px; text-indent: 30.3333px;color:#000;">: Cg. Fadzlin binti Alias</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Nisuhaina binti Abdullah Sani</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Noorhazira binti Ismail</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Noormarina binti Hj Abdullah</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Rosliza binti Ismail</span></p>
<p><span style="font-size: 15px; text-indent: 30.3333px;color:#000;">: Cg. Dhanesh a/l Madhavan</span></p>
<p><span style="font-size: 15px; text-indent: 30.3333px;color:#000;">: Cg. Norzita Azura binti Mohamad</span></p>
<p style="color: #000;">:Cg. Fadzlina binti A. Manap&nbsp;</p>
<p><span style="font-size: 15px; text-indent: 30.3333px;color:#000;">: Cg. Suria Suriani binti Kamal</span></p>
<p><span style="font-size: 15px; text-indent: 30.3333px;color:#000;">: Cg. Suhaida binti Subranl</span></p>
<p><span style="font-size: 15px; text-indent: 30.3333px;color:#000;"><span style="text-indent: 30.3333px;color:#000;">: Cg. Suria Suriani binti Kamal</span></span></p>
<p>&nbsp;</p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Khairussani bin Othman</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Rafisah binti Abd Rashid</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">: Cg. Suriani binti Yusoff</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp; Pn. Julia Rostila&nbsp;</span><span style="font-size: 15px; line-height: 107%; color:#000;">binti</span><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp; Jusoh</span></p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;</span><span style="font-size: 15px; line-height: 107%;color:#000;">:&nbsp;</span>Semua KP/ Penyelaras mata</p>
<p>&nbsp;</p>
<p style="color:#000;"><span style="font-size: 15px; line-height: 107%;color:#000;">&nbsp;&nbsp;pelajaran</span></p>
</td>
</tr>
</tbody>
</table>
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
