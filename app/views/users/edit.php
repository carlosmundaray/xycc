<?php require APP . 'views/inc/portal-header.php'; ?>

<div class="red_bg"></div>
<section id="website" class="">
    <section id="portal_container">
        <nav id="main_nav">
            <section class="logo_container">
                <div class="logo red_full_logo"></div>
            </section>
            <section class="link_container">
                <div class="profile_container">
                    <div class="profile_picture" style="background-image: url('<?php echo ROOT . '/img/users/901282.jpg'; ?>');"></div>
                    <a href="#" class="name">Nagisa Tomoya</a>
                    <div class="role">Role: Student</div>
                    <div class="id">Id: 901282</div>
                </div>
                <?php require APP . 'views/inc/nav-admin.php'; ?>
            </section>
        </nav>
        <section id="portal_content">
            <nav id="top_nav">
                <?php echo $data['title']; ?>
            </nav>
            <section id="content" class="flex_row">
                <?php echo $data['userInfo']['first_name']; ?>
            </section>
        </section>
    </section>
</section>
<!-- #website -->

<?php require APP . 'views/inc/portal-footer.php'; ?>
