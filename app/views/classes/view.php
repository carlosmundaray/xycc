<?php require APP . 'views/layouts/portal/header.php'; ?>

<section id="content" class="flex_row">
      <section class="left_section_module flex_w_4">
          <section class="modules">
               <section class="class_heading">

               </section>
               <section class="course_content" data-simplebar>
                    <div class="content_container">
                         <div class="icon"></div>
                         <div class="content">
                              <h1>Welcome to Intro to Criminal Justice</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>
                    </div>
                    <div class="content_container">
                         <div class="icon"></div>
                         <div class="content">
                              <h1>Welcome to Intro to Criminal Justice</h1>
                         </div>
                    </div>
                    <div class="content_container">
                         <div class="icon"></div>
                         <div class="content">
                              <h1>Welcome to Intro to Criminal Justice</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>
                    </div>
                    <div class="content_container">
                         <div class="icon"></div>
                         <div class="content">
                              <h1>Welcome to Intro to Criminal Justice</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>
                    </div>
                    <div class="content_container">
                         <div class="icon"></div>
                         <div class="content">
                              <h1>Welcome to Intro to Criminal Justice</h1>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                         </div>
                    </div>
               </section>
          </section>
      </section>
      <section class="right_section_module">
          <section class="modules user_stats_module flex_30_vh">
              <h1 class="module_heading">Professor Info</h1>
              <div class="profile_container margin_none">
                     <div class="profile_picture" style="background-image: url('<?php echo $data['teacher']['avatar']; ?>');"></div>
                     <a href="#" class="name"><?php echo ucwords($data['teacher']['first_name']) . ' ' . ucwords($data['teacher']['last_name']); ?></a>
                     <div class="role">View Profile</div>
              </div>
          </section>
          <section class="modules department_list_module">
              <h1 class="module_heading">Menu</h1>
              <ul data-simplebar>
                  <li><a href="" class="selected">Home</a></li>
                  <li><a href="" class="">Attendance</a></li>
                  <li><a href="" class="">Assignments</a></li>
                  <li><a href="" class="">Tests & Quizzes</a></li>
                  <li><a href="" class="">Resources</a></li>
                  <li><a href="" class="">Class List</a></li>
                  <li><a href="" class="">Grades</a></li>
            </ul>
          </section>
      </section>
</section>
<!-- #website -->

<?php require APP . 'views/layouts/portal/footer.php'; ?>
