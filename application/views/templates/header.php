<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Creative Audio Pekanbaru</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css?v=1.4.0'); ?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/demo.css'); ?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css'); ?>" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>"/>
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="<?php echo base_url('assets/img/bg1.jpg'); ?>">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Creative Audio
                </a>
            </div>
			<ul class="nav">
                <?php 
                    $username = $this->session->userdata('nama');
                    $level = $this->session->userdata('level');
					$kode = $this->session->userdata('kode');
                    if($username!='' && $level=='1'){
                ?>
                <li>
                    <a href="<?php echo base_url('Produk_Ctrl'); ?>">
                        <i class="pe-7s-cart"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('User_Ctrl'); ?>">
                        <i class="pe-7s-user"></i>
                        <p>Member</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Transaksi_Ctrl'); ?>">
                        <i class="pe-7s-shopbag"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Transaksi_Ctrl/limit'); ?>">
                        <i class="pe-7s-shopbag"></i>
                        <p>Transaksi Limit</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Main_Ctrl/logout'); ?>">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
                <?php } ?>
			</ul>
		</div>
	</div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
						<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon"><?=$username?> <i class="pe-7s-angle-down"></i></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"  style="padding:10px;">
                                    <a class="dropdown-item" href="<?php echo base_url('Main_Ctrl/logout'); ?>">
										<i class="pe-7s-unlock"></i> Logout
									</a>
                                </div>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
