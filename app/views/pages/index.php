<?php require APP . 'views/inc/header.php'; ?>

<section class="preloader with_opacity"><div class="logo red_full_logo"></div></section>
<section id="website" class="no_site">
  <!-- Logo -->
  <div class="logo_full_wrap no_opacity">
    <a href="#" class="logo_wrap">
      <div class="logo white_icon_logo"></div>
    </a>
    <div class="logo_text"></div>
  </div>

  <!-- Apply Button -->
  <a href="#" class="apply_btn no_opacity">Apply Today</a>

  <!-- Login Button -->
  <div class="login_wrap no_opacity">
    <a href="#">Login to Portal</a>
    <div class="login_line"></div>
  </div>

  <!-- Main Content: Centered Menu & Title -->
  <section id="main_content" class="no_opacity">
      <h1><span>01</span>Admissions</h1>
      <ul>
        <li><a href="#">Admissions</a></li>
        <li><a href="pages/about/">About</a></li>
        <li><a href="#">Academics</a></li>
        <li><a href="#">Campus Life</a></li>
        <li><a href="#">Store</a></li>
      </ul>
  </section><!-- #main_content -->
  <section class="gallery_circles no_opacity">
    <div class="circle selected x1" style="background-image: url('<?php echo ROOT; ?>img/gallery/01.jpeg');"></div>
    <div class="circle x2"></div>
    <div class="circle x3"></div>
    <div class="circle x4"></div>
    <div class="circle x5"></div>
  </section>
</section><!-- #website -->


<?php require APP . 'views/inc/footer.php'; ?>
