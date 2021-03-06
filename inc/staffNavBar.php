      <div class="logo">
        <div id="display">
          
        </div>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($pageTitle == 'Dashboard'){ echo "active";} ?>  ">
            <a class="nav-link" href="<?php echo BASE_URL;?>staff/course-adviser/index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if($pageTitle == 'User Profile'){ echo "active";} ?>">
            <a class="nav-link" href="<?php echo BASE_URL;?>staff/course-adviser/profile.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li> 
         
          <li class="nav-item <?php if($pageTitle == 'List of Supervisors'){ echo "active";} ?>">
            <a class="nav-link" href="<?php echo BASE_URL;?>staff/course-adviser/supervisors.php">
              <i class="material-icons">library_books</i>
              <p>Supervisors</p>
            </a>
          </li>
          <li class="nav-item <?php if($pageTitle == 'List of Siwes Students'){ echo "active";} ?>">
            <a class="nav-link" href="<?php echo BASE_URL;?>staff/course-adviser/candidates.php">
              <i class="material-icons">library_books</i>
              <p>Siwes Students</p>
            </a>
          </li>
          <li class="nav-item <?php if($pageTitle == 'Reports'){ echo "active";} ?>">
            <a class="nav-link" href="<?php echo BASE_URL;?>staff/course-adviser/reports.php">
              <i class="material-icons">library_books</i>
              <p>Reports</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo"><?php echo $pageTitle; ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <label class="bmd-label-floating"><?php echo $role; ?></label>
              </div>
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo BASE_URL;?>staff/course-adviser/profile.php">Profile</a>
                  <!-- <a class="dropdown-item" href="#">Settings</a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo BASE_URL;?>staff/logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>