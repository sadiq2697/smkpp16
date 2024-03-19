<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Dashboard";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
function getall($tabel)
{
    $query = query("select count(*) as total from $tabel");
    $row = $query->row;
    return $row['total'];
}
$total_people = getall('people');
$total_album = getall('album');
$total_gallery = getall('gallery');
?>
        <!-- Top Bar Start -->
		<?php
		require_once("common/header.inc.php")
		?>
		<!-- Top Bar End -->
        <!-- Begin page -->
        <div class="wrapper">

            



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content" style="display:none;">
                    <div class="container">

                        <!-- Page-Title -->

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="md md-people text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter"><?php echo $total_people?></b></h3>
                                        <p class="text-muted">Total Members</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md md-crop-original text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter"><?php echo $total_album?></b></h3>
                                        <p class="text-muted">Total Albums</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="md md-collections text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter"><?php echo $total_gallery?></b></h3>
                                        <p class="text-muted">Total Photos</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>




                       

                    </div> <!-- container -->

                </div> <!-- content -->

                <?php
				require_once("common/footer.inc.php");
				?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
<?php
require_once("footer.php");
?>