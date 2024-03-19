<?php
require_once("config.php");
authentication('');
//session_start();
$userid = $_SESSION["adminid"];
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
		<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

        <title>Dashboard</title>
		
        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery.steps/css/jquery.steps.css" />
		<link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />
		<!-- Custombox css -->
		<link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
        <!-- DataTables -->
		<link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link href="assets/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="assets/js/jquery-tags-input/jquery.tagsinput.css" />


        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/modernizr.min.js"></script>
		.kv-file-remove
		{
			display:none;
		}
		.file-upload-indicator
		{
			display:none;
		}
		.kv-file-upload
		{
			display:none !important;
		}
		</style>
		
    </head>


    <body>