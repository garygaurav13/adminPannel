<?php $subAdmin = $_SESSION['auth_user']['role']; ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/icon.png" class="img-circle elevation-2" alt="User Image">
        </div> 
        <div class="info">
          <a href="#" class="d-block">Machinerytrader</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-item menu-close">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
              <?php
                if($subAdmin !=="sub-admin")
                { ?>
                  <li class="nav-item">
                    <a href="subAdmin.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sub-Admin</p>
                    </a>
                  </li>
                  <?php
                }
              ?>
            </ul>
          </li>
          <li class="nav-item">
            <a href="dealers.php" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>Dealers</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="contactUs.php" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Contact Us</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="testimonials.php" class="nav-link">
              <i class="nav-icon fas fa-quote-left"></i>
              <p>
                Testimonials
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <h5><strong>Country/State</strong></h5>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Country/State
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="countries.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Country</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="state.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>State</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
