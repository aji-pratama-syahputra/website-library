<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Rumah Buku - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/zabuto_calendar.css')?>">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/gritter/css/jquery.gritter.css')?>" />-->
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css')?>">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/chart-master/Chart.js')?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo site_url('home'); ?>" class="logo"><b>Rumah Buku</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                   
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo site_url('control_loginMember/logout'); ?>">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><img src="<?php echo base_url('assets/img/ui-sam.jpg')?>" class="img-circle" width="60"></p>
                  <!--<h5 class="centered">Rumah Buku</h5>-->
                    
                  <li class="mt">
                      <a href="<?php echo site_url('home'); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>

                  <li class="mt">
                      <a href="<?php echo site_url('Buku/control_beliBuku'); ?>">
                          <i class="fa fa-table"></i>
                          <span>Data Buku</span>
                      </a>
                  </li>
                  
                   <li class="mt">
                      <a href="<?php echo site_url('Beli/beli_control/pembelian/' .$this->session->userdata('username_member'));?>">
                          <i class="fa fa-table"></i>
                          <span>Pembelian</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="<?php echo site_url('Member/Member_tambah/pembayaran');?>">
                          <i class="fa fa-check-circle-o"></i>
                          <span>Pembayaran</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->