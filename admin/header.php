<?php
require 'session.php';
require '../database/config.db.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard - Ice Cream</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="dashboard.php">Ice Cream</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="inc/admin.logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="uploads/maintainers/profile/admin-1.jpg" alt="User Image" width="45" height="45">
        <div>
          <p class="app-sidebar__user-name">Abu Huraira</p>
          <p class="app-sidebar__user-designation">ADMIN</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Administrators</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="all-maintainers.php"><i class="icon fa fa-circle-o"></i> View Administrators</a></li>
            <li><a class="treeview-item" href="maintainer.php" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Add Administrator</a></li>
          </ul>
        </li>



        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Banners</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add-banner.php"><i class="icon fa fa-circle-o"></i> Add Banner</a></li>
            <li><a class="treeview-item" href="banners.php"><i class="icon fa fa-circle-o"></i> Banners</a></li>
            <!-- <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Index Page</a></li>
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Menus Page</a></li>
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Specials Page</a></li>
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> About Page</a></li>
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Contact Page</a></li> -->
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Homepage Sliders</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add-slider.php"><i class="icon fa fa-circle-o"></i> Add to Slider</a></li>
            <li><a class="treeview-item" href="sliders.php"><i class="icon fa fa-circle-o"></i> Sliders</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Ice Cream Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add-to-gallery.php"><i class="icon fa fa-circle-o"></i> Add to Gallery</a></li>
            <li><a class="treeview-item" href="galleries.php"><i class="icon fa fa-circle-o"></i> Gallery Images</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Menus</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add-to-menu.php"><i class="icon fa fa-circle-o"></i> Add New Menu</a></li>
            <li><a class="treeview-item" href="menus.php"><i class="icon fa fa-circle-o"></i> All Menus</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Clients Testimonials</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Add New</a></li>
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> All Testimonials</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Users Panel</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="subscribers.php"><i class="icon fa fa-circle-o"></i> Subscribers</a></li>
            <li><a class="treeview-item" href="user-contacts.php"><i class="icon fa fa-circle-o"></i> User Messages</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Footer Configure</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="footer-configure.php"><i class="icon fa fa-circle-o"></i> Update Footer</a></li>
          </ul>
        </li>
      </ul>
    </aside>


    <main class="app-content">
