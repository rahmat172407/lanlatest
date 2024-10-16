<?php session_start();
    if($_SESSION["login"] != "hundredTrue"){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="ui/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard : BAF LAN</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="ui/css/font-awesome-all.css" rel="stylesheet">
    <link href="ui/css/bootstrap.min.css" rel="stylesheet" />
    <link href="ui/css/now-ui-dashboard.min.css" rel="stylesheet" />
    <link href="ui/css/style.css" rel="stylesheet" />
    <link href="ui/css/custom.css" rel="stylesheet" />
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
        <div style="margin: 0 auto" >
            <p style="margin-top: 10px"><a  href="dashboard.php" class="navbar-brand">BAF LAN</a></p>
        </div>
    </div>

</nav>
<!-- End Navbar -->
    <div class="main-panel">
        <!-- Navbar -->
    <div class="sidebar" data-color="navi">
    <div class="logo">
        <a href="dashboard.php" class="simple-text logo-mini">
            <img src="ui/img/baf_logo.png">
        </a>
        <a href="dashboard.php" class="simple-text logo-normal">
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
            <li class="active">
                <a href="dashboard.php" class="navi-color navi-text-bold">
                    <i class="fa fa-home navi-color" ></i>
                    <p>DASHBOARD</p>
                </a>
            </li>
            <li>
                <a href="application_soft/index.php">
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
            <li>
                <a href="users/index.php" >
                    <i class="fa fa-window-restore" ></i>
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
                    <span class="page-header-text">Dashboard</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><span class="page-title-text">Quick Links</span></div>
        <div class="card-body watermark2">
            <div class="row ">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="application_soft/create.php">
                        <div class="small-box bg-blue-active">
                        <div class="inner">
                            <p>Application Software <br> (AS)</p>
                            <h3>Total : 1001</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-window-restore" ></i>
                        </div>
                        <span class="small-box-footer">&nbsp;</span>
                    </div>
                    </a>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="two.html">
                    <div class="small-box bg-olive-active">
                        <div class="inner">
                            <p>Two <br> (2)</p>
                            <h3>Total : 681</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-window-restore" ></i>
                        </div>
                        <span class="small-box-footer">&nbsp;</span>
                    </div>
                    </a>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="three.html">
                        <div class="small-box bg-purple-active">
                        <div class="inner">
                            <p>Three <br> (3)</p>
                            <h3>Total : 40</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-window-restore" ></i>
                        </div>
                        <span class="small-box-footer">&nbsp;</span>
                    </div>
                    </a>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="users/index.php">
                        <div class="small-box bg-aqua-active">
                        <div class="inner">
                            <p>Users <br> (4)</p>
                            <h3>Total : 32</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-window-restore" ></i>
                        </div>
                        <span class="small-box-footer">&nbsp;</span>
                    </div>
                    </a>
                </div>
                <!-- ./col -->
         </div>
    </div>
</div>
</div>

<footer class="footer" >
    <div class="container-fluid">
        <div class="copyright">
            &copy <script>document.write(new Date().getFullYear())</script>,
            Developed by <a href="http://www.baf.org" target="_blank">BAF Communication Unit</a>.
        </div>
    </div>
</footer>
</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="ui/js/core/jquery.min.js" ></script>
<script src="ui/js/core/popper.min.js" ></script>
<script src="ui/js/core/bootstrap.min.js" ></script>
<script src="ui/js/plugins/perfect-scrollbar.jquery.min.js" ></script>
<script src="ui/js/plugins/moment.min.js"></script>
<script src="ui/js/now-ui-dashboard.min.js" ></script>
<!--Author : Sgt Omar Faruq, GS-->
<!--Mobile: 01611775477-->
<!--Email: oneskybd9@gmail.com-->
</html>