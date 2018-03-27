<?php require APP . 'views/layouts/portal/header.php'; ?>

<section id="content">
     <section class="top_section_module">
          <!-- Major Progress -->
          <section class="modules flex_column_top_center">
            <h1 class="module_heading">Major Credit Progress</h1>
            <div id="progress_circle"></div>
            <div class="progressbar_container">
              <div id="total_credits"></div>
              <div id="total_credits_school"></div>
            </div>
          </section>
          <!-- Recent Courses -->
          <section class="modules">
            <h1 class="module_heading">Recent Courses</h1>
            <div class="module_list_container" data-simplebar>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover active"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/1.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1>Networking Fundamentals</h1>
                  <h2>CIS180-M01 | FALL2018</h2>
                  <h2>John Rodrigues</h2>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/2.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1>Networking Fundamentals</h1>
                  <h2>CIS180-M01 | FALL2018</h2>
                  <h2>Eric Cameron</h2>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/3.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1>Networking Fundamentals</h1>
                  <h2>CIS180-M01 | FALL2018</h2>
                  <h2>Eric Cameron</h2>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/4.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1>Networking Fundamentals</h1>
                  <h2>CIS180-M01 | FALL2018</h2>
                  <h2>Eric Cameron</h2>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/1.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1>Networking Fundamentals</h1>
                  <h2>CIS180-M01 | FALL2018</h2>
                  <h2>Eric Cameron</h2>
                </div>
              </a>
            </div>
            <div class="button_container">
              <a href="#" class="button">View More</a>
            </div>
          </section>
          <!-- Weather : Might Use Later -->
          <!-- <section class="modules flex_column_center">
            <div class="weather_icon" style="background-image: url('<?php echo ROOT . 'img/icons/weather.png'; ?>');"></div>
            <div class="day">Monday</div>
            <div class="date">January 17, 2018</div>
          </section> -->
          <!-- Recent Assignment -->
          <section class="modules">
            <h1 class="module_heading">Recent Assignments</h1>
            <div class="module_list_container" data-simplebar>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover active"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/1.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1><span class="completed"></span>Networking Fundamentals</h1>
                  <h2>Assignment #3 | Due: Mar 15, 2018</h2>
                  <h2>Not Yet Completed</h2>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/2.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1><span class="completed"></span>Networking Fundamentals</h1>
                  <h2>Assignment #3 | Due: Mar 15, 2018</h2>
                  <h2>Not Yet Completed</h2>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/3.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1><span class="completed"></span>Networking Fundamentals</h1>
                  <h2>Assignment #3 | Due: Mar 15, 2018</h2>
                  <h2>Not Yet Completed</h2>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/4.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1><span class="completed"></span>Networking Fundamentals</h1>
                  <h2>Assignment #3 | Due: Mar 15, 2018</h2>
                  <h2>Not Yet Completed</h2>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="module_list">
                <div class="left_line_hover"></div>
                <div class="list_image" style="background-image: url(<?php echo ROOT . 'img/users/1.jpg'; ?>)"></div>
                <div class="list_info">
                  <h1><span class="completed"></span>Networking Fundamentals</h1>
                  <h2>Assignment #3 | Due: Mar 15, 2018</h2>
                  <h2>Not Yet Completed</h2>
                </div>
              </a>
            </div>
            <div class="button_container">
              <a href="#" class="button">View More</a>
            </div>
          </section>
          </section>
          <section class="bottom_section_module">
          <!-- Events -->
          <section class="modules">
            <div class="event_container">
              <div class="event">
                <div class="bg_blk_cover"></div>
                <div class="event_image" style="background-image: url('<?php echo ROOT . 'img/events/1.jpg'; ?>'); "></div>
                <h1><i>Technology</i><br>New Unity3d VR Course Coming Fall 2018</h1>
                <div class="learn_more">Learn More</div>
              </div>
              <div class="event">
                <div class="bg_blk_cover"></div>
                <div class="event_image" style="background-image: url('<?php echo ROOT . 'img/events/2.jpg'; ?>'); "></div>
                <h1><i>Technology</i><br>New Unity3d VR Course Coming Fall 2018</h1>
                <div class="learn_more">Learn More</div>
              </div>
              <div class="event">
                <div class="bg_blk_cover"></div>
                <div class="event_image" style="background-image: url('<?php echo ROOT . 'img/events/3.jpg'; ?>'); "></div>
                <h1><i>Technology</i><br>New Unity3d VR Course Coming Fall 2018</h1>
                <div class="learn_more">Learn More</div>
              </div>
              <div class="event">
                <div class="bg_blk_cover"></div>
                <div class="event_image" style="background-image: url('<?php echo ROOT . 'img/events/4.jpg'; ?>'); "></div>
                <h1><i>Technology</i><br>New Unity3d VR Course Coming Fall 2018</h1>
                <div class="learn_more">Learn More</div>
              </div>
            </div>
          </section>
          <!-- Recent Messages -->
          <section class="modules">
            <h1 class="module_heading">Recent Messages</h1>
            <div data-simplebar class="messages_container">
              <a href="<?php echo ROOT; ?>" class="recent_messages">
                <div class="left_line_hover active"></div>
                <div class="message_image" style="background-image: url(<?php echo ROOT . 'img/users/4.jpg'; ?>)"></div>
                <div class="message_info">
                  <h1>Networking Fundamentals</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor layoutsididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="recent_messages">
                <div class="left_line_hover"></div>
                <div class="message_image" style="background-image: url(<?php echo ROOT . 'img/users/4.jpg'; ?>)"></div>
                <div class="message_info">
                  <h1>Networking Fundamentals</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor layoutsididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="recent_messages">
                <div class="left_line_hover"></div>
                <div class="message_image" style="background-image: url(<?php echo ROOT . 'img/users/4.jpg'; ?>)"></div>
                <div class="message_info">
                  <h1>Networking Fundamentals</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor layoutsididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="recent_messages">
                <div class="left_line_hover"></div>
                <div class="message_image" style="background-image: url(<?php echo ROOT . 'img/users/4.jpg'; ?>)"></div>
                <div class="message_info">
                  <h1>Networking Fundamentals</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor layoutsididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </a>
              <a href="<?php echo ROOT; ?>" class="recent_messages">
                <div class="left_line_hover"></div>
                <div class="message_image" style="background-image: url(<?php echo ROOT . 'img/users/4.jpg'; ?>)"></div>
                <div class="message_info">
                  <h1>Networking Fundamentals</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor layoutsididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
              </a>
            </div>
            <div class="button_container">
              <a href="#" class="button">View More</a>
            </div>
          </section>
     </section>
</section>

<?php require APP . 'views/layouts/portal/footer.php'; ?>
