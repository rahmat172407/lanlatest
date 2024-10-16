<?php require_once('session.php');?>
<!--Author : Sgt Omar Faruq, GS-->
<!--Mobile: 01611775477-->
<!--Email: oneskybd9@gmail.com-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../ui/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard : BAF LAN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="../ui/css/font-awesome-all.css" rel="stylesheet">
    <link href="../ui/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../ui/css/now-ui-dashboard.min.css" rel="stylesheet" />
    <link href="../ui/css/style.css" rel="stylesheet" />
    <link href="../ui/css/custom.css" rel="stylesheet" />
</head>

<body class="sidebar-mini">
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin-top: -9px;">
                        <a class="btn btn-round btn-custom" href="../logout.php">
                            <i class="fas fa-sign-out-alt" aria-hidden="true"></i>&nbsp;Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Navbar -->
    <div class="main-panel">
        <!-- Navbar -->
        <div class="sidebar" data-color="navi">
            <div class="logo">
                <a href="../dashboard.php" class="simple-text logo-mini">
                    <img src="../ui/img/baf_logo.png">
                </a>
                <a href="../dashboard.php" class="simple-text logo-normal">
                    BAF COMM (U)
                </a>
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-simple btn-icon btn-neutral btn-round">
                        <i class="fa fa-arrow-left text_align-center visible-on-sidebar-regular"></i>
                        <i class="fa fa-expand design_bullet-list-67 visible-on-sidebar-mini"></i>
                    </button>
                </div>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../dashboard.php">
                            <i class="fa fa-home" ></i>
                            <p>DASHBOARD</p>
                        </a>
                    </li>
                    <li>
                        <a href="../application_soft/index.php">
                            <i class="fa fa-window-restore" ></i>
                            <p>Application Soft</p>
                        </a>
                    </li>
                    <li>
                        <a href="two.html" >
                            <i class="fa fa-window-restore" ></i>
                            <p>Two</p>
                        </a>
                    </li>
                    <li>
                        <a href="three.html" >
                            <i class="fa fa-window-restore" ></i>
                            <p>Three</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="index.php" class="navi-color navi-text-bold">
                            <i class="fa fa-window-restore navi-color"></i>
                            <p>Users</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Navbar -->
        <div class="panel-header panel-header-sm"></div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-stats card-raised">
                        <div class="card-body text-center">
                            <span class="page-header-text">Users</span>
                        </div>
                    </div>
                </div>
            </div>
