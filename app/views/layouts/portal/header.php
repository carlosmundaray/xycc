<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT; ?>/public/favicon.png">
  <link rel="stylesheet" href="<?php echo ROOT; ?>public/css/fonts.css">
  <link rel="stylesheet" href="<?php echo ROOT; ?>public/css/reset.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/1d676bd406.css">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo ROOT; ?>public/css/portal.css">
  <title>
    <?php echo SITENAME . ' | ' . $data['title']; ?>
  </title>
</head>

<body class="overflow_hidden">
<section class="preloader hidden">
  <div class="top_screen move_up"></div>
  <div class="bottom_screen move_down"></div>
  <div class="white_icon_logo fade_out"></div>
</section>
<main id="main">

     <div class="red_bg"></div>
     <section id="website" class="">
         <section id="portal_container">
             <nav id="main_nav">
                 <section class="logo_container">
                     <div class="logo red_full_logo"></div>
                 </section>
                 <section class="link_container">
                      <div class="profile_container">
                        <div class="profile_picture" style="background-image: url('<?php echo $_SESSION['user_avatar']; ?>');"></div>
                        <a href="#" class="name"><?php echo ucwords($_SESSION['user_full_name']); ?></a>
                        <div class="role">Role: <?php echo ucwords($_SESSION['user_role']); ?></div>
                        <div class="id">Id: <?php echo $_SESSION['user_id']; ?></div>
                      </div>

                      <?php  if(isAdmin()){ ?>

                      <ul class="main_links">
                        <li><div class="left_line_hover <?php echo ($data['title'] == 'Dashboard') ? 'active': false; ?>"></div><a href="<?php echo ROOT . 'dash/'; ?>"><i class="icon fa fa-tachometer"></i>Dash</a></li>
                        <li><div class="left_line_hover <?php echo ($data['title'] == 'Users') ? 'active': false; ?>"></div><a href="<?php echo ROOT . 'users/'; ?>"><i class="icon fa fa-users"></i>Users</a></li>
                        <li><div class="left_line_hover <?php echo ($data['title'] == 'Courses') ? 'active': false; ?>"></div><a href="<?php echo ROOT . 'courses/'; ?>"><i class="icon fa fa-code"></i>Courses</a></li>
                        <li><div class="left_line_hover <?php echo ($data['title'] == 'Majors') ? 'active': false; ?>"></div><a href="<?php echo ROOT . 'dash/'; ?>"><i class="icon fa fa-certificate"></i>Majors</a></li>
                        <li><div class="left_line_hover <?php echo ($data['title'] == 'Events') ? 'active': false; ?>"></div><a href="<?php echo ROOT . 'dash/'; ?>"><i class="icon fa fa-camera-retro"></i>Events</a></li>
                        <li><div class="left_line_hover <?php echo ($data['title'] == 'Calendar') ? 'active': false; ?>"></div><a href="<?php echo ROOT . 'dash/'; ?>"><i class="icon fa fa-calendar"></i>Calendar</a></li>
                      </ul>

                      <?php } else { ?>

                      <ul class="main_links">
                        <li><div class="left_line_hover active"></div><a href="<?php echo ROOT . 'dash/';  ?>"><i class="icon fa fa-tachometer"></i>Dash</a></li>
                        <li><div class="left_line_hover"></div><a href="<?php echo ROOT . 'courses/';  ?>"><i class="icon fa fa-code"></i>Courses</a></li>
                        <li><div class="left_line_hover"></div><a href="<?php echo ROOT . 'dash/';  ?>"><i class="icon fa fa-wrench"></i>Tools</a></li>
                        <li><div class="left_line_hover"></div><a href="<?php echo ROOT . 'dash/';  ?>"><i class="icon fa fa-camera-retro"></i>Events</a></li>
                        <li><div class="left_line_hover"></div><a href="<?php echo ROOT . 'dash/';  ?>"><i class="icon fa fa-book"></i>Bookstore</a></li>
                        <li><div class="left_line_hover"></div><a href="<?php echo ROOT . 'dash/';  ?>"><i class="icon fa fa-calendar"></i>Calendar</a></li>
                      </ul>

                      <?php } ?>

                 </section>
             </nav>
             <section id="portal_content">
                 <nav id="top_nav">
                     <div class="title"><?php echo $data['title']; ?></div>
                     <nav class="top_nav_menu">
                          <ul>
                               <li><a href="<?php echo ROOT . 'portal/'; ?>"><i class="icon fa fa-home"></i>Xycc</a></li>
                               <li><a href="<?php echo ROOT . 'settings/'; ?>"><i class="icon fa fa-sliders"></i>Settings</a></li>
                               <li><a href="<?php echo ROOT . 'users/logout'; ?>"><i class="icon fa fa-lock"></i>Log Out</a></li>
                          </ul>
                     </nav>
                 </nav>
