<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>River Valleys</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url(); ?>public/dashboard/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url(); ?>public/dashboard/css/style.css">
  <link rel="stylesheet" href="<?=base_url(); ?>public/dashboard/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?=base_url(); ?>public/dashboard/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='public/dashboard/img/favicon.ico' />
</head>

<body>
   <div id="flash-success-container"  class="flash-message">
        <?php if (session()->has('success')) : ?>
        <div class="flash-success">
            <?= session('success') ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if (session()->has('error')): ?>

    <div id="toast-container" class="toast-top-right flash-message" >
        <div class="toast toast-error" aria-live="assertive" style="">
            <div class="toast-message">
                <?= session('error') ?>
            </div>
        </div>
    </div>
    <?php endif ?>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
      
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?=base_url(); ?>public/dashboard/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="<?=base_url(); ?>profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="<?=base_url(); ?>public/dashboard/img/logo.png" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layers"></i><span>Masters</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">User Create</a></li>
                    <li><a class="nav-link" href="<?=base_url(); ?>menu-list">Menu</a></li>
                    <li><a class="nav-link" href="widget-data.html">Add Product</a></li>
                    <li><a class="nav-link" href="widget-data.html">Edit Product</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-cart"></i><span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Pending orders</a></li>
                    <li><a class="nav-link" href="widget-data.html">Delivered orders</a></li>
                    <li><a class="nav-link" href="widget-data.html">Undelivered orders</a></li>
                    <li><a class="nav-link" href="widget-data.html">Refunds Orders</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>Report</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Customer report</a></li>
                    <li><a class="nav-link" href="widget-data.html">Orders report</a></li>
                    <li><a class="nav-link" href="widget-data.html">Product report</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Customer Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Profiles</a></li>
                    <li><a class="nav-link" href="widget-data.html">Customer Support</a></li>
                    <li><a class="nav-link" href="widget-data.html">Loyalty Programs</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="bar-chart-2"></i><span>Sales and Analytics</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Sales Reports</a></li>
                    <li><a class="nav-link" href="widget-data.html">Customer Analytics</a></li>
                    <li><a class="nav-link" href="widget-data.html">Inventory Reports</a></li>
                    <li><a class="nav-link" href="widget-data.html">Order Statistics</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book"></i><span>Content Managements</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Manage Pages</a></li>
                    <li><a class="nav-link" href="widget-data.html">Blog Management</a></li>
                    <li><a class="nav-link" href="widget-data.html">SEO Settings</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="tag"></i><span>Marketing and Promotions</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Discount Codes</a></li>
                    <li><a class="nav-link" href="widget-data.html">Email Campaigns</a></li>
                    <li><a class="nav-link" href="widget-data.html">Banner Management</a></li>
                    <li><a class="nav-link" href="widget-data.html">Affiliate Programs</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>Settings and Configuration</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Payment Gateway Integration</a></li>
                    <li><a class="nav-link" href="widget-data.html">Shipping Options</a></li>
                    <li><a class="nav-link" href="widget-data.html">Tax Settings</a></li>
                    <li><a class="nav-link" href="widget-data.html">Site Settings</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shield"></i><span>Security and Compliance</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">User Activity Logs</a></li>
                    <li><a class="nav-link" href="widget-data.html">Data Privacy</a></li>
                    <li><a class="nav-link" href="widget-data.html">Backup and Restore</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="life-buoy"></i><span>Support and Maintenance</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="widget-chart.html">Technical Support</a></li>
                    <li><a class="nav-link" href="widget-data.html">System Updates</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
