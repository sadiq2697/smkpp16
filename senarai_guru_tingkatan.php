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

    <title>Senarai Guru Tingkatan</title>
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
                <h3>Senarai Guru Tingkatan</h3>
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
                            <h4 class="title">PENGURUSAN TINGKATAN TAHUN 2021</h4>
                       
                            <p style="color: #000;text-align: justify;">

                                <?php 
                                $about_query=query("SELECT senarai_guru_tingkatan from hem");
                                $aboutrow = $about_query->row;
                                $content = $aboutrow["senarai_guru_tingkatan"];
                                echo $content;
                                ?> 
                                

<!-- <table class="MsoTableGrid" style="border-collapse: collapse; border: none; height: 1639px;" border="0" width="365" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">PENYELARAS </span></strong></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">&nbsp;</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">Tingkatan 1</span></strong></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">: Cg. Farizzah binti Razali</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">Tingkatan 2</span></strong></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">:Cg</span></strong><strong style="text-indent: 30.3333px;"><span" style="font-size: 15px;color:#000;">. Rozaini binti Omar</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">Tingkatan 3</span></strong></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">: Cg. Sarina binti Hashim</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">Tingkatan 4</span></strong></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">: Cg.&nbsp;Idales binti Abdol Seman</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">Tingkatan 5</span></strong></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">: Cg.&nbsp;Roslina binti Mat Junoh</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 249.6pt; padding: 0cm 5.4pt 0cm 5.4pt;" colspan="2" valign="top" width="333">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><strong><span" style="font-size: 15px;color:#000;">GURU KELAS</span></strong></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">1 Farabi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">:Cg.&nbsp;Rosli bin Mohd Nor</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">1 Avicenna</span></p>
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">1 Kindi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">:Cg.&nbsp;Zubaidah binti Md. Darani</span></p>
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;"><span style="font-size: 15px;; text-indent: 30.3333px;">:Cg.&nbsp;Suria SUriani binti Kamal</span></span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">1 Haitham</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">: Cg. Nor Akmaniah binti Arwae</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">1 Raazi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">: Cg. Nur Amalina binti Abdul Manap</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">1 Averroes</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">: Cg. Mahazira binti Ab Rahman</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">1 Nafis</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Nur Syazana binti Daud</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">2 Farabi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Mohd Zulfadzli bin Arbaee</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">2 Avicenna</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Norzita Azura binti Mohamad</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">2 Kindi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -28.15pt; text-indent: 22.75pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg. Nurul Syahida binti Hussin</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">2 Haitham</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg. Sihasmin binti Omar</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">2 Raazi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt;"><span" style="font-size: 15px;color:#000;">: Cg. Khairussani bin Othman</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">2 Averroes</span></p>
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">2 Nafis</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Muhammad Afikie bin Azmi</span></p>
<p style="margin-left: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Mohd Reduan bin Mahmood</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">3 Farabi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt; text-align: justify; text-justify: inter-ideograph;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Noorafizan binti A.Rashid</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">3 Avicenna</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt; text-align: justify; text-justify: inter-ideograph;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Muhammad Fahmi bin Zawawi</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">3 Kindi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt; text-align: justify; text-justify: inter-ideograph;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Rosmalizawati binti Sifin</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">3 Haitham</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt; text-align: justify; text-justify: inter-ideograph;"><span" style="font-size: 15px;color:#000;">: Cg. Noorhazira binti Ismail @ Hassan</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">3 Raazi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt; text-align: justify; text-justify: inter-ideograph;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Suhaida binti Subran</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">3 Averroes</span></p>
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">3 Nafis</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="margin-left: -5.65pt; text-align: justify; text-justify: inter-ideograph;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Suvarmani a/l Subhan</span></p>
<p style="margin-left: -5.65pt; text-align: justify; text-justify: inter-ideograph;"><span" style="font-size: 15px;color:#000;">&nbsp; Cg.&nbsp;Syariman bin Mansor</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">4 Farabi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Fadzlin binti Alias</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">4 Avicenna: </span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Nor Amirah binti Radzi</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">4 Kindi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Norfaridatul Akmar binti Hasim</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">4 Haitham</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Siti Zamrah binti Shahalun</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">4 Raazi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Harziana binti Baharom</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">4 Averroes</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Mariam binti Mertadza</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">4 Nafis</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Hasliza binti Talib</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">5 Farabi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Vijayarani a/p Soorinayaranan</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">5 Avicenna</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Noriha binti Hussin</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">5 Kindi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Dhanesh a/l Madhavan</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">5 Haitham</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Rosliza binti Ismail</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">5 Raazi</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Noraihan binti Abd Wahab</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">5 Averroes</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Yusmira binti Yusuf</span></p>
</td>
</tr>
<tr>
<td style="width: 72.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="96">
<p style="margin-left: -4.0pt; tab-stops: 4.0cm;"><span" style="font-size: 15px;color:#000;">5 Nafis</span></p>
</td>
<td style="width: 177.3pt; padding: 0cm 5.4pt 0cm 5.4pt;" valign="top" width="236">
<p style="text-align: justify; text-justify: inter-ideograph; text-indent: -5.65pt;"><span" style="font-size: 15px;color:#000;">:&nbsp;Cg.&nbsp;Faniza binti Ibrahim</span></p>
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
