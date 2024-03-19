<?php include('administrative/config.php');
$visitors_ip=$_SERVER['REMOTE_ADDR'];
$total_visitors_browser = $_SERVER['HTTP_USER_AGENT'];
$insert_total_visitors=mysqli_query($con,"INSERT INTO total_visitors(total_visitors_ip,total_visitors_browser,total_visitors_date,total_visitors_time) values('$visitors_ip','$total_visitors_browser',now(),now())");

 ?>

<!--POP Up Form Wrap Start-->
    <!--
    <div class="modal fade" id="apply_form" tabindex="-1" role="dialog" aria-labelledby="sign-in">
        <div class="modal-dialog" role="document">
            <div class="gt_pf_outer_wrap default_width">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="col-md-6">
                    <div class="gt_pf_form default_width">
                        <h3>Register a Courses</h3>
                        <form class="default_width">
                            <input class="c_ph" type="text" placeholder="Name">
                            <input class="c_ph" type="email" placeholder="Email">
                            <input class="c_ph" type="text" placeholder="Phone Number">
                            <select>
                                <option>Course</option>
                                <option>Course</option>
                                <option>Course</option>
                            </select>
                            <div class="gt_view_more default_width">
                                <a href="#">Register Now</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gt_pf_form_img default_width">
                        <a href="#"><img src="images/logo-white.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--POP Up Form Wrap End-->

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
                <div class="gt_hdr_3_ui_element">
                    <ul>
                        
                        <li><i class="fa fa-phone"></i> +603-8888-0248</li>
                        <li><i class="fa fa-envelope-o"></i><a href="#">pengetua@smkpp16.edu.my</a></li>
                        <li><i class="fa fa-map-marker"></i> Jln P16G, Presint 16
62150 Wilayah Persekutuan Putrajaya</li>
                    </ul>
                </div>
               

            </div>
        </div>
        <div class="gt_top3_menu default_width">
            <div class="container-fluid">
                <div class="gt-logo">
                 <a href="index.php"><img src="images/headerweblogo1.gif" alt="" style="width: 300px;"></a>               
                  </div>
                <nav class="gt_hdr3_navigation">
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

                        <li><a href="#">INFO PDPR</a></li>
                        <li><a href="hubungi.php">Hubungi</a></li>

                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--Header Wrap End-->