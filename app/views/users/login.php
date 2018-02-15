<?php require APP . 'views/inc/portal-header.php'; ?>


<section id="website" class="">
  <!-- Logo -->
  <div class="logo_full_wrap">
    <a href="<?php echo ROOT; ?>" class="logo_wrap home_page">
      <div class="logo white_icon_logo"></div>
    </a>
  </div>

  <!-- Login Button -->
  <div class="login_wrap">
    <a href="<?php echo ROOT; ?>">Back</a>
    <div class="login_line"></div>
  </div>

  <section class="form_login_container">
    <form action="<?php echo ROOT;?>portal/login/" method="post">
      <input type="email" name="email" placeholder="Email: <?php echo $data['errors']['email']; ?>">
      <input type="password" name="password" placeholder="Password: <?php echo $data['errors']['password']; ?>">
      <input type="submit" name="submit" value="Log In">
      <?php echo $data['errors']['match']; ?>
      <a href="<?php echo ROOT; ?>portal/password">Forgot Username or Password?</a>
    </form>
  </section>
</section><!-- #website -->


<?php require APP . 'views/inc/portal-footer.php'; ?>
