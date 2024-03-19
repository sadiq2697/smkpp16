<?php
require_once("config.php");
checkSession('');
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="image/favicon.png">

        <title>Login</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class="card-box" style="border-radius: 100px 25px 25px 100px;">
            <div class="panel-heading"> 
            <!--     <center>
                    <img src="assets/images/headerweblogo1.gif" width="250px" />
                </center> -->
                <h3 class="text-center"> Sign In to <strong class="text-custom">Dashboard</strong> </h3>
                    <center>
                    <img src="assets/images/headerweblogo1.gif" width="250px" />
                </center>
            </div> 


            <div class="panel-body">
            <form class="form-horizontal m-t-20" id="loginform" method="post" action="functions/login.php?do=login" onsubmit="return login()">
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="username" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" required="" placeholder="Password">
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
				
                <div class="form-group m-b-0">
                    <div class="col-sm-12">
                        <span class="text-danger error"></span>
                    </div>
                </div>
            </form> 
            
            </div>   
            </div>                              
            
        </div>
        
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		<script src="assets/js/custom.js"></script>
	
	</body>
</html>