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
  <link rel="stylesheet" href="<?php echo ROOT; ?>public/css/index.css">
  <title>
    <?php echo SITENAME . ' | ' . $data['title']; ?>
  </title>
</head>

<body>

  <nav class="main_nav">
    <section class="logo_container"><a href="<?php echo ROOT; ?>" class="white_full_logo"></a></section>
    <section class="links_nav_container">
      <section class="top_nav_links">
        <ul>
          <li><a href="/">Calendar</a></li>
          <li><a href="/">News</a></li>
          <li><a href="/">Directory</a></li>
        </ul>
        <a href="/" class="top_nav_login">Login</a>
      </section>
      <section class="main_links_container">
        <section class="main_links">
          <ul>
            <li><a href="/">About</a><span class="fa fa-caret-down"></span></li>
            <li><a href="/">Admissions</a><span class="fa fa-caret-down"></span></li>
            <li><a href="/">Academics</a><span class="fa fa-caret-down"></span></li>
            <li><a href="/">Campus Life</a><span class="fa fa-caret-down"></span></li>
            <li><a href="/">Store</a></li>
          </ul>
          <div class="info_box_container">
            <div class="info_box">
              <span>Info For</span>
            </div>
            <span class="fa fa-caret-down"></span>
            <ul class="more_info_box">
              <li><a href="/">Graduates</a></li>
              <li><a href="/">Undergraduates</a></li>
              <li><a href="/">Parents</a></li>
            </ul>
          </div>
        </section>
        <section class="search_container">
          <div class="fa fa-search"></div>
        </section>
      </section>
    </section>

  </nav>
