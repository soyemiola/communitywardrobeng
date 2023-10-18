<nav class="navbar header-navbar pcoded-header">
          <div class="navbar-wrapper">
            <div class="navbar-logo">
              <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="feather icon-menu"></i>
              </a>
              <a href="index.html" class="text-center">
              <img class="img-fluid" src="files/assets/images/logo.png" alt="logo image" />
              </a>
              <a class="mobile-options">
              <i class="feather icon-more-horizontal"></i>
              </a>
            </div>
            <div class="navbar-container">
              <ul class="nav-left">
                <li>
                  <a href="#!" onclick="javascript:toggleFullScreen()">
                  <i class="feather icon-maximize full-screen"></i>
                  </a>
                </li>
              </ul>
              <ul class="nav-right">
                
                <li class="user-profile header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <img src="files/assets/images/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                      <span><?php echo $_SESSION['name'] ?></span>
                      <i class="feather icon-chevron-down"></i>
                    </div>
                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                     <!-- <li>
                        <a href="default/user-profile.html">
                        <i class="feather icon-user"></i> Profile
                        </a>
                      </li> -->
                      <?php 
                        if ($_SESSION['accesslevel'] == 1) {
                          ?>

                          <li>
                            <a href="#">
                            <i class="feather icon-user"></i> Add new account
                            </a>
                          </li>

                          <?php
                        }

                      ?>
                      
                      <li>
                        <a href="auth-logout.php">
                        <i class="feather icon-log-out"></i> Logout
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>