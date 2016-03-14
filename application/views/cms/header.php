<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title><?php echo $title;?></title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/vendor/toastr/toastr.min.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/styles/style.css">
</head>
<body>

<div class="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="<?php echo base_url();?>cms/dashboard">
                    CMS
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class=" profil-link">
                        <a href="#">
                            <span class="profile-address">ManilaFunCup 2016</span>
                            <img src="<?php echo base_url();?>assets/luna_theme/images/profile.jpg" class="img-circle" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    Main
                </li>
                <li class="active">
                    <a href="<?php echo base_url();?>cms/dashboard">Dashboard</a>
                </li>

                <li>
                    <a href="#monitoring" data-toggle="collapse" aria-expanded="false">
                        Monitoring<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="monitoring" class="nav nav-second collapse">
                        <li><a href="metrics.html"> Metrics</a></li>
                        <li><a href="usage.html"> Usage</a></li>
                        <li><a href="activity.html"> Activity</a></li>
                    </ul>
                </li>
                <li class="nav-category">
                    UI Elements
                </li>
                <li>
                    <a href="#uielements" data-toggle="collapse" aria-expanded="false">
                        General<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="uielements" class="nav nav-second collapse">
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="gridSystem.html">Grid system</a></li>
                        <li><a href="draggable.html">Draggable</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#tables" data-toggle="collapse" aria-expanded="false">
                        Tables design<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="tables" class="nav nav-second collapse">
                        <li><a href="tableStyles.html">Table styles</a></li>
                        <li><a href="dataTables.html">Data Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="formElements.html"> Form elements </a>
                </li>
                <li>
                    <a href="#charts" data-toggle="collapse" aria-expanded="false">
                        Charts and graphs<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="charts" class="nav nav-second collapse">
                        <li><a href="flotCharts.html">Flot charts</a></li>
                        <li><a href="sparkline.html">Sparkline</a></li>
                    </ul>
                </li>

                <li class="nav-category">
                    User
                </li>
                <li>
                    <a href="<?php echo base_url();?>cms/login/logout">
                        Log Out
                    </a>
                </li>
                <li class="nav-info">
                    <div class="m-t-xs">
                        <span class="c-white">ManilaFunCup</span> inspired by LUNA Theme
                    </div>
                </li>
            </ul>
        </nav>
    </aside>