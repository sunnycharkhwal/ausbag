  <!-- nav -->
  <span class="screen-darken"></span>
  <div class="d-lg-none">
      <div class="mobile_menu_div_top">
          <div class="row m-0">
              <div class="col-6 mobile_menu_div">
                  <i class="fas fa-bars" data-trigger="navbar_main"></i>
              </div>
              <div class="col-6  mobile_menu_div2">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item dropdown btn_logout_div">
                          <button class=" dropdown-toggle btn_logout" data-bs-toggle="dropdown">
                              <img src="img/logoutIcon.svg" alt="logout icon">
                          </button>
                          <ul class="dropdown-menu fade-up">
                              <li>
                                  <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'myAccount.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="myAccount.php">
                                      <span>my Account</span>
                                  </a>
                              </li>
                              <li>
                                  <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'edit_account.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="edit_account.php">
                                      <span>edit Account</span>
                                  </a>
                              </li>
                              <li>
                                  <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'create_new_account.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="create_new_account.php">
                                      <span>Sign up</span>
                                  </a>
                              </li>
                              <li>
                                  <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="login.php">
                                      <span>Log in</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark nav_bg">
      <div class="container-fluid">
          <div class="offcanvas-header d-block d-xxl-none d-xl-none d-lg-none">
              <button class="btn-close float-end mt-4"></button>
          </div>
          <div class="container">
              <div class="nav_ul_div">
                  <ul class="navbar-nav">
                      <li>
                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'nav-link navbar_nav_activ' : 'nav-link'; ?>" href="index.php">home </a>
                      </li>
                      <li>
                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'nav-link navbar_nav_activ' : 'nav-link'; ?>" href="about.php">about us </a>
                      </li>

                      <li class="nav-item dropdown my_dropdown my_dropdown_products d-none d-xxl-block d-xl-block d-lg-block">
                          <a href="product.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products
                          </a>
                          <div class="dropdown-menu fade-up">
                              <div class="dropdown_menu_inner">
                                  <div class="menu_ul_div">
                                      <ul>
                                          <li>
                                              <div class="menu_title">ALL PRODUCTS</div>
                                          </li>
                                          <li>
                                              <p>PAPER CARRY BAG</p>
                                          </li>
                                          <li>
                                              <a href="product.php" class="dropdown-item">
                                                  <span>White Kraft Twisted Paper Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>White Kraft Black Rope Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Brown Kraft Twisted paper Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Brown Kraft Black Rope Handles</span>
                                              </a>
                                          </li>
                                      </ul>
                                      <ul>
                                          <li>
                                              <p>Plastic Bags</p>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown-item">
                                                  <span>White Plastic bags Die Cut Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Postal Satchels</span>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="menu_ul_div ul_color">
                                      <ul class="ul_2">
                                          <li>
                                              <p>Coloured Paper Bags</p>
                                          </li>
                                          <li class="color_li">
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #000000;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #00FF1A;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #10D0FB;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #7000FF;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #B3ABA4;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #FF0000;"></label>
                                              </a>
                                          </li>
                                      </ul>
                                      <ul>
                                          <li>
                                              <p>Plastic Bags</p>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown-item">
                                                  <span>White Plastic bags Die Cut Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Postal Satchels</span>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="menu_ul_div">
                                      <ul class="ul_2">
                                          <li>
                                              <p>Paper Takeaway Bags</p>
                                          </li>
                                          <li>
                                              <a class="dropdown-item">
                                                  <span>Box Bottom Brown No handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>100% Recycled Paper Bags No</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Handles</span>
                                              </a>
                                          </li>
                                      </ul>
                                      <ul>
                                          <li>
                                              <p>Gloss Laminated Paper Bags</p>
                                          </li>
                                          <li class="color_li">
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #000000;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #00FF1A;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #10D0FB;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #7000FF;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #B3ABA4;"></label>
                                              </a>
                                              <a href="#" class="color_li_a">
                                                  <label style="background-color: #FF0000;"></label>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="menu_ul_div ul_color">
                                      <ul class="ul_2">
                                          <li>
                                              <p>Uba Bags</p>
                                          </li>
                                          <li>
                                              <a class="dropdown-item">
                                                  <span>Box Bottom Twisted Paper Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Box Bottom Die Cut handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Brown Kraft Flat Folded paper </span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Handles</span>
                                              </a>
                                          </li>
                                      </ul>
                                      <ul>
                                          <li>
                                              <p>Wine Bags</p>
                                          </li>
                                          <li>
                                              <a class="dropdown-item">
                                                  <span>White Kraft Twisted Paper Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>White Kraft Die Cut Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Brown Kraft Cotton Ribbon Handles</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Brown Kraft Pre Printed</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'ev_chargers.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="ev_chargers.php">
                                                  <span>Matte Laminated Ribbon Handles</span>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="nav-item dropdown my_dropdown mobile_Products  d-block d-xxl-none d-xl-none d-lg-none">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products
                          </a>
                          <ul class="dropdown-menu fade-up ">
                              <li>
                                  <a class="dropdown-item" href="product.php">
                                      <span>PAPER CARRY BAG</span>
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="product.php">
                                      <span>Coloured Paper Bags</span>
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="product.php">
                                      <span>Gift Bags</span>
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="product.php">
                                      <span>Food Bags</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'trems_and_condition.php' ? 'nav-link navbar_nav_activ' : 'nav-link'; ?>" href="trems_and_condition.php">trems & condition</a>
                      </li>
                      <li>
                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'privacy_policy.php' ? 'nav-link navbar_nav_activ' : 'nav-link'; ?>" href="privacy_policy.php">PRIVACY POLICY</a>
                      </li>
                      <li>
                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'faq.php' ? 'nav-link navbar_nav_activ' : 'nav-link'; ?>" href="faq.php">FAQ</a>
                      </li>
                      <li>
                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'custom_bags.php' ? 'nav-link navbar_nav_activ' : 'nav-link'; ?>" href="custom_bags.php">CUSTOM BAGS</a>
                      </li>
                      <li>
                          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'nav-link navbar_nav_activ' : 'nav-link'; ?>" href="contact.php">CONTACT</a>
                      </li>
                  </ul>
                  <ul class="navbar-nav ms-auto d-none d-xxl-block d-xl-block d-lg-block ">
                      <li class="nav-item dropdown btn_logout_div">
                          <button class=" dropdown-toggle btn_logout" data-bs-toggle="dropdown">
                              <img src="img/logoutIcon.svg" alt="logout icon">
                              <span>Signup</span>
                          </button>
                          <ul class="dropdown-menu fade-up">
                              <li>
                                  <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'myAccount.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="myAccount.php">
                                      <span>my Account</span>
                                  </a>
                              </li>
                              <li>
                                  <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'edit_account.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="edit_account.php">
                                      <span>edit Account</span>
                                  </a>
                              </li>
                              <li>
                                  <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'create_new_account.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="create_new_account.php">
                                      <span>Sign up to a New Account</span>
                                  </a>
                              </li>
                              <li>
                                  <a class=" <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'dropdown-item drowpdown_text' : 'dropdown-item'; ?>" href="login.php">
                                      <span>Log in to Existing Account</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
  <!-- nav end -->