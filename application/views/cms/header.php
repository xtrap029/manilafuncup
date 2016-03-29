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
    <?php
    if(isset($menu)){
        if($menu == "reg" || $menu == "team"){
        ?>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/vendor/datatables/datatables.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/luna_theme/vendor/toastr/toastr.min.css">
        <?php
        }
        elseif($menu == "dash"){
        ?>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/timecircle/TimeCircles.css">
        <?php
        }
    }
    ?>

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
                <li class="nav-category">Main</li>
                <li class="<?php if(isset($menu)) echo $menu == 'dash' ? 'active' : '';?>">
                    <a href="<?php echo base_url();?>cms/dashboard">Dashboard</a>
                </li>
                <li class="<?php if(isset($menu)) echo $menu == 'reg' ? 'active' : '';?>">
                    <a href="<?php echo base_url();?>cms/registration">
                        Registrations
                    </a>
                </li>
                <li class="<?php if(isset($menu)) echo $menu == 'team' ? 'active' : '';?>">
                    <a href="<?php echo base_url();?>cms/team">
                        Playing Teams
                    </a>
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