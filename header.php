<style type="text/css">
     <link href="css/login-register.css" rel="stylesheet">
</style>
<?php include('administrative/config.php');
$visitors_ip=$_SERVER['REMOTE_ADDR'];
$total_visitors_browser = $_SERVER['HTTP_USER_AGENT'];
$insert_total_visitors=mysqli_query($con,"INSERT INTO total_visitors(total_visitors_ip,total_visitors_browser,total_visitors_date,total_visitors_time) values('$visitors_ip','$total_visitors_browser',now(),now())");

 ?>

 <link href="css/login-register.css" rel="stylesheet">
    <!--Header Wrap Start-->
    <header>
        <div class="gt_top3_wrap default_width">
            <div class="container">
                <div class="gt_top3_scl_icon">
                    <ul class="gt_hdr3_scl_icon">
                        <li><a href="https://www.facebook.com/smkpp16" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCB12nWbWRqN-r9NoWxaAiIQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.instagram.com/ubksto/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="gt_hdr_3_ui_element" style="font-size:12px;">
                    <ul>
                        <li>
                            <div class="gt-user-login">
                                <a href="#">CARTA ORGANISASI</a>
                                <ul>
                                    <li><a href="https://drive.google.com/file/d/1RhKExmQc47ZyBHIwcHGdqp3jjvHKCP5l/view?usp=sharing" target="_blank"> Kurikulum</a></li>
                                    <li><a href="https://drive.google.com/file/d/1hY1yIIUtnTpHGtlsSQXhG4JXeXqD7JyG/view?usp=sharing" target="_blank"> Kurikulum</a></li>
                                    <li><a href="https://drive.google.com/file/d/1pQ1xLsVo0Va2ua2csh8dtCcrC2Q2qX-V/view?usp=sharing" target="_blank"> Hal Ehwal Murid (Unit Disiplin)</a></li>
                                    <li><a href="https://drive.google.com/file/d/11-MphfpIlT4TiCMQmgMKeDXlulWFHVHM/view?usp=sharing" target="_blank"> Kokurikulum</a></li>

                                    <li><a href="" target="_blank"> Kurikulum</a></li>

                                </ul>
                            </div>
                        </li>


                         <li>
                            <div class="gt-user-login">
                                <a href="#">TAKWIM 2023</a>
                                <ul>
                                    <li><a href="https://drive.google.com/file/d/1702b1-GEBunZ6XMrM2dBuaeIvNmwJAPI/view?usp=sharing" target="_blank"> Persekolahan(Kurikulum)</a></li>

                                    <li><a href="https://drive.google.com/file/d/1LGg4lfu7cHyUtO6OOIeCvS0WNKUJuQDp/view?usp=sharing" target="_blank"> Hal Ehwal Murid</a></li>

                                    <li><a href="https://drive.google.com/file/d/1HHQy_UjQggENwH6QkasL2DGYj56w6FtT/view?usp=sharing" target="_blank"> Kokurikulum</a></li>
                                </ul>
                            </div>
                        </li>
			   <li>		
			  <div class="gt-user-login">
                                <a href="#">PAUTAN BORANG</a>
                                <ul>

                                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdFXCJeeHjzDnLq3Ap-jnzXizz1uL3HUxLplrsjdyrIj9b47w/viewform" target="_blank">  Pelaporan Pembacaan Buku</a> </li>
<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSd7WNpjDcta4xIaCEAmIXCJ7XvVUaOJfGOETtgTlC1v5EVTqQ/viewform" target="_blank"> Pelaporan Alat Bantu Mengajar ICT</a></li>
<li><a href="https://docs.google.com/forms/d/e/1FAIpQLScccHN2FUmpaph4-J-NdWnMTM9n10AFHASdtSfcED1-8stdOQ/viewform" target="_blank"> Pelaporan Pengucapan Awam Murid</a></li>
<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdIfzNMBI3SRCbmzaunksdzCCNuZMievwupV4dNwjOJxBbZwQ/viewform" target="_blank"> Pelaporan Kemangkiran Guru</a></li>
<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdTqQTQ9epQyEaLnzSIvYYeNL8nMbW1F7B6JkvB2EfAxpEjbQ/viewform" target="_blank"> Pelaporan Guru Bertugas</a></li>
<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfCPMQJzEZmilo9A28bqmnEbDAdcj2ffKzQ-EGvzROklbJRig/viewform" target="_blank"> Pelaporan Guru Ganti</a></li>
<li><a href="https://docs.google.com/a/smkpp16.edu.my/forms/d/e/1FAIpQLSe0bhZ3GyH4n_toQ4hVLq36SGpK9htfyJqty7WiMTg3QZZWRQ/viewform" target="_blank"> Pelaporan Aktiviti Murid</a></li>
<li><a href="https://drive.google.com/file/d/0B0mvMABc0JX9U2d1aU9tY3RwRUU/view?resourcekey=0-3b8wZT-lIkDag-thYerOFQ" target="_blank"> Pelaporan Bergambar Aktiviti Murid</a></li>
<li><a href="https://forms.gle/VUjHPHXmMJHSRwoG8" target="_blank"> e-Minit Curai</a></li>
<li><a href="https://forms.gle/mhheEHkrNM2RoWL78" target="_blank"> e-Lapor Learning Walk</a></li>
<li><a href="https://mylink.la/nilamsto22" target="_blank"> NILAM</a></li>
<li><a href="https://docs.google.com/a/smkpp16.edu.my/forms/d/e/1FAIpQLSeX7aEBrZYDAGiAS8dRb8YzrkNi-4xQEyglqc9i4i2VrE86jw/viewform" target="_blank"> e-Aduan Guru</a></li>
<li><a href="https://forms.gle/uUWPBkK367WczpLY9" target="_blank"> Pelaporan Program Kokurikulum STO</a></li>
<li><a href="https://forms.gle/MFsK2qa2pNc8EFqu8" target="_blank"> Laporan Pemantauan Pentadbir </a></li>
<li><a href="https://drive.google.com/drive/folders/1r5yF_nzt7fmy6KiigdVgXRj2Dib6OIL3?usp=sharing" target="_blank"> Borang Penilaian Kebersihan & Keceriaan </a></li>
                          </ul>
                            </div>
                        </li>


                         <li>
                            <div class="gt-user-login">
                                <a href="#">E-TEMPAH</a>
                                <ul>

                                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSei5BXDP1RUwCve_AmpxTD9WlQ_Kv6J-iQ_D6g3a4yMvKiaPQ/viewform" target="_blank"> Van Rasmi Sekolah</a></li>

<li><a href="https://docs.google.com/document/d/15OTtj5ViU3pgzMPR3KXnsNN1aUvCWOjVNmj8z4MI4cc/edit" target="_blank"> Netbook/Ruangan Buku PSS</a></li>

<li><a href="https://docs.google.com/document/d/1-9i0CIn6nktocjr8_okEVrG7KWD0ykBbfPOfhgAMGTs/edit" target="_blank"> Makmal Komputer</a></li>

<li><a href="https://docs.google.com/document/d/1ucFz6wVh-Nievw6t4DjfQ3AjOvnaKnITmfAcHE0EWM8/edit" target="_blank"> Bilik Fakhran</a></li>

<li><a href="https://docs.google.com/document/d/1IlzCDneSJG5Jo_13wj2Q7iiMufGGLKQEd-fYuVDPh74/edit" target="_blank"> Bilik Mesyuarat</a></li>

<li><a href="https://docs.google.com/document/d/16GiFAntCAMo8OpDgVl77F_Iv5xVbJsswKYeZ08Lg-eY/edit" target="_blank"> Bilik TS25</a></li>

<li><a href="https://docs.google.com/document/d/1WemzLJS1WS4qL64OuMKs5jT3xhcBOjc2squGqdllZ18/edit" target="_blank"> Bilik Serbaguna</a></li>

<li><a href="https://docs.google.com/document/d/1Pl3lz6NVhB8TRW0cPaZxh283etz7NxgWEPtucV4ZWFk/edit" target="_blank"> Digital Maker Hub</a></li>

<li><a href="https://docs.google.com/document/d/1JUotgN1MB4yaWIRjhUSe3HkZcdq4aLRr69KCJuHTDeg/edit" target="_blank"> Padang Sekolah</a></li>

<li><a href="https://docs.google.com/document/d/1SHYnAtV4Y8iXG9YJwXnlTaj1QR2YXGqAWt86i_Yb6Ks/edit" target="_blank"> Bilik Konferens PSS</a></li>

<li><a href="https://docs.google.com/document/d/1ciq_b143fF89ZjKKdKMbuQANDEG5iBc4-achJie8fP0/edit" target="_blank"> Bilik Persidangan</a></li>

<li><a href="https://docs.google.com/document/d/1p8Ed6C-OkF7Cy0M4rlLO42XDaEELnwh9oLve8jeCmGo/edit" target="_blank"> Surau Tok Kenali</a></li>

<li><a href="https://docs.google.com/document/d/1_VKxG8-HaL6FqNRUvZZjrkk2-_6QtfoEB2F5VnxUPBA/edit" target="_blank"> Musolla</a></li>

<li><a href="https://docs.google.com/document/d/1poyuyz4B4jK898GqAQpUlJDpf4r_8Isj-aQVFn3ILG8/edit?usp=sharing" target="_blank"> Bilik Digital STO </a></li>
<li><a href="https://docs.google.com/spreadsheets/d/10W5mBB2kLoru7JqfYLOiV08clBwS0XdqRclT1zeTd0M/edit?usp=sharing" target="_blank"> TEMPAHAN PADANG</a></li>
                       </ul>
                            </div>
                        </li>

                        <li>
                            <div class="gt-user-login">
                                <a href="#">UNIT KAUNSELING</a>
                                <ul>
                                    <li><a href="https://docs.google.com/document/d/1vx6OFpDqC80Y8KX_C63ILChFQ8CPIPh4W7aDtmFh7Ic/edit?usp=sharing" target="_blank"> Modul Mentor Mentee</a></li>
                                    <li><a href="https://forms.gle/eSXUgWysrSUWsq1r8" target="_blank"> Rujukan Kaunseling</a></li>
                                    <li><a href="https://epkm.moe.gov.my/" target="_blank"> e-Profil Kerjaya Murid</a></li>
                                    <li><a href="https://anyflip.com/lldr/rega/" target="_blank"> Info Grafik UBK</a></li>
                                    <li><a href="https://www.instagram.com/ubksto/?hl=en" target="_blank"> Instagram UBKSTO</a></li>
                                    <li><a href="https://forms.gle/MMMkTDh4bcUDCwdh7" target="_blank"> Tele Psikososial STO Sejahtera</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="gt-user-login">
                                <a href="#">VIDEO SEKOLAH</a>
                                <ul>
                                    <li><a href="https://youtu.be/DyTXvlEMAmo" target="_blank"> STO Virtual Run 2021</a></li>
                                    <li><a href="https://drive.google.com/file/d/1nKW5DHcu_wE0UCXnae00kS_wXf8TGJX7/view?usp=sharing" target="_blank"> Perhimpunan Maya Siri 1</a></li>
                                    <li><a href="https://youtu.be/TzjLYRcAJXM" target="_blank"> Takbir Raya STO  2021</a></li>
                                    <li><a href="https://youtu.be/v-ZFBTYfsi0" target="_blank"> Ucapan Hari Guru KGS STO 2021</a></li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="gt-user-login">
                                <a href="#">MUAT TURUN</a>
                                <ul>
                                    <li><a href="https://drive.google.com/file/d/1VuM6-ArSKTI_DnjahXwAvjCKsxjNJsBr/view?usp=sharing" target="_blank">KSSM</a></li>
                                    <li><a href="https://drive.google.com/file/d/0B0r8OH-PwaKESjJoMkFiSDhDQ00/view?usp=sharing" target="_blank">Slide Kriteria Cemerlang TBBK Guru</a></li>
                                    <li><a href="https://drive.google.com/file/d/0B0r8OH-PwaKEeldlV1I4a3NpeWc/view?usp=sharing" target="_blank">Komponen Keberhasilan</a></li>
                                    <li><a href="https://drive.google.com/file/d/0B0r8OH-PwaKELTV4U25jZG5NNnM/view?usp=sharing" target="_blank">Pelan Pembangunan Professional</a></li>
                                    <li><a href="https://drive.google.com/file/d/0B0r8OH-PwaKEc2F1Q0gzMkdZd1E/view?usp=sharing" target="_blank">PPPM 2015-2025</a></li>

                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="gt-user-login">
                                <a href="#">DIGITAL LIBRARY STO</a>
                                <ul>
                                    <li><a href="https://fliphtml5.com/bookcase/gvolu" target="_blank"> UBK STO </a></li>

                                    <li><a href="https://fliphtml5.com/bookcase/kdczl" target="_blank"> PSS STO  </a></li>

                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gt-top-bar default_width">
                <div class="gt-logo">
                    <a href="index.php"><img src="images/headerweblogo1.gif" alt="" style="width: 350px;"></a>
                </div>
                
                <!--top_navi_caption start-->
                <div class="top_navi_caption">

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 20, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
                         <ul>


                        <li>
                            <div class="top_navi_circal">
                                <a href="#"><i class="fa fa-phone"></i></a>
                                <div class="top_navi_code">
                                    <h5 style="font-weight:bold;color: #000;">Hubungi Kami</h5>
                                    <span style="color:#000;">+603-8888-0248</span>
                                </div>
                            </div>
                        </li>
                       
                        <li>
                            <div class="top_navi_circal">
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <div class="top_navi_code">
                                    <h5 style="font-weight:bold;color: #000;">Hantarkan Kami</h5>
                                    <span style="color:#000;">pengetua@smkpp16.edu.my</span>
                                </div>
                            </div>
                        </li>

                        
                             <li>
                            <div class="top_navi_circal">
                                <a href="#"><i class="fa fa-clock-o"></i></a>
                                <div class="top_navi_code">
                                    <h5 style="font-weight:bold;color: #000;">SPM Countdown <p id="demo" style="color: #000;font-size: 20px;padding-top: 10px;"></p></h5>
                                    <span></span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!--top_navi_caption end-->
            </div>
            
            <div class="gt-main-menu">
                <nav class="menu">
                    <!-- Responsive Buttun -->
                    <a class="navbar-btn collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>   
                    <!-- Responsive Buttun -->
                    <ul class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       
                       <li><a href="index.php">Home</a>
                          
                        </li>
                        
                        <li><a href="javascript:avoid(0);">Mengenai</a>
                            <ul>
                                <li><a href="sejarah_sekolah.php">Sejarah Sekolah</a></li>
                                <li><a href="piagam_pelanggan.php">Piagam Pelanggan</a></li>
                                <li><a href="logo_sekolah.php">Logo Sekolah</a></li>
                                <li><a href="lagu_sekolah.php">Lagu Sekolah</a></li>
                                <li><a href="lagu_persekutuan.php">Lagu W.Persekutuan</a></li>
                                <li><a href="pentadbir.php">Pentadbir</a></li>
                                <li><a href="guru.php">Guru</a></li>
                                <li><a href="staf_sokongan.php">Staf Sokongan</a></li>

                                                         </ul>
                        </li>

                          <li><a href="javascript:avoid(0);">Akademik</a>
                            <ul>
                                <li><a href="jawatankuasa_induk_kurikulum.php">Jawatankuasa Induk Kurikulum</a></li>
                                <li><a href="bidang_bahasa.php">Bidang Bahasa</a></li>
                                <li><a href="bidang_sains_matematik.php">Bidang Sains &amp; Matematik</a></li>
                                <li><a href="bidang_teknik_vokasional.php">Bidang Teknik &amp; Vokasional</a></li>
                                <li><a href="bidang_kemanusiaan.php">Bidang Kemanusiaan</a></li>
                                                         </ul>
                        </li>

                        <li><a href="javascript:avoid(0);">HEM</a>
                            <ul>
                                <li><a href="jawatankuasa_induk_hem.php">Jawatankuasa Induk HEM</a></li>
                                <li><a href="senarai_guru_tingkatan.php">Senarai Guru Tingkatan</a></li>
                            </ul>
                        </li>


                        <li><a href="javascript:avoid(0);">Kokurikulum</a>
                            <ul>
                                <li><a href="jk_induk_kokurikulum.php">JK Induk Kokurikulum</a></li>
                                <li><a href="sukan_permainan.php">Sukan &amp; Permainan</a></li>
                                <li><a href="unit_beruniform.php">Unit Beruniform</a></li>
                                <li><a href="kelab_persatuan.php">Kelab &amp; Persatuan</a></li>
                            </ul>
                        </li>

                        <li><a href="gallery.php">Galeri</a></li>

                        <li><a href="info_pdpr.php">INFO PDPR</a></li>

                         <li><a href="javascript:avoid(0);">PAUTAN</a>
                            <ul>

                                <li>
<h5><a href="https://sgmy.moe.gov.my/" target="_blank">SGMy</a></h5>
</li>
<li>
<h5><a href="https://portal.moe.edu.my/" target="_blank">Digital Learning KPM</a></h5>
</li>
<li>
<h5><a href="https://webmail.1govuc.gov.my/owa/auth/logon.aspx?replaceCurrent=1&amp;url=https%3a%2f%2fwebmail.1govuc.gov.my%2fowa%2f%23authRedirect%3dtrue" target="_blank">1GovUC</a></h5>
</li>
<li>
<h5><a href="https://sps1.moe.gov.my/indexsso.php" target="_blank">SSO</a></h5>
</li>
<li>
<h5><a href="https://ssdm.moe.gov.my/" target="_blank">SSDM</a></h5>
</li>
<li>
<h5><a href="https://wea2003.1bestarinet.net" target="_blank">VLE-Frog</a></h5>
</li>
<li>
<h5><a href="https://splkpm.moe.gov.my/" target="_blank">e-SPL</a></h5>
</li>
<li>
<h5><a href="http://eoperasi.moe.gov.my" target="_blank">e-Operasi</a></h5>
</li>
<li>
<h5><a href="https://sapsnkra.moe.gov.my/access-denied.php" target="_blank">SAPS</a></h5>
</li>
<li>
<h5><a href="https://epenyatagaji-laporan.anm.gov.my/Layouts/Login/Login.aspx" target="_blank">e-Penyata Gaji</a></h5>
</li>
<li>
<h5><a href="http://apdm.moe.gov.my" target="_blank">APDM</a></h5>
</li>
<li>
<h5><a href="http://sppbs.moe.gov.my/sppbs/index.cfm" target="_blank">SPPBS</a></h5>
</li>
<li>
<h5><a href="https://eprestasi.moe.gov.my" target="_blank">e-Prestasi</a></h5>
</li>
<li>
<h5><a href="https://epkm.moe.gov.my/" target="_blank">SePKM</a></h5>
</li>
<li>
<h5><a href="https://hrmis2.eghrmis.gov.my/HRMISNET/common/main/login.aspx" target="_blank">HRMIS</a></h5>
</li>
<li>
<h5><a href="https://pajsk.moe.gov.my/" target="_blank">PAJSK</a></h5>
</li>
<li>
<h5><a href="http://jpwpp.moe.gov.my/v2/" target="_blank">JPWPP</a></h5>
</li>
<li>
<h5><a href="http://www.eduwebtv.com/" target="_blank">EduWebTV</a></h5>
</li>
<li>
<h5><a href="https://www.malaysia.gov.my/" target="_blank">myGovernment</a></h5>
</li>
<li>
<h5><a href="http://www.epsa.gov.my/" target="_blank">EPSA</a></h5>
</li>
<li>
<h5><a href="http://www.u-library.gov.my/portal/web/guest/home" target="_blank">Perpustakaan Negara</a></h5>
</li>
<li>
<h5><a href="https://www.facebook.com/smkpp16.dcs" target="_blank">Digital Champion School FB</a></h5>
</li>
<li>
<h5><a href="http://wea2003.1bestarinet.net/app/os#!f5425dd6c4179e65435aca816a552e61/home" target="_blank">Briged Siber</a></h5>
</li>
<li>
<h5><a href="http://wea2003.1bestarinet.net/app/os#!c1b84048efc888a65694a5ee710fe7b5/laman-utama" target="_blank">Pusat Sumber Sekolah</a></h5>
</li>
<li>
<h5><a href="http://ecoyouthblog.toyota.com.my/smk-putrajaya-presint/" target="_blank">Blog TEY</a></h5>
</li>


                            </ul>
                        </li>

                        <li><a href="hubungi.php">Hubungi</a></li>


                    </ul>
                </nav>
          

            </div>
        </div>
    </header>
    <!--Header Wrap End-->
