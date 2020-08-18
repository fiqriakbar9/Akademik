<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>Akademik</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
            
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php
							$sql='select username from admin where username="'.$_SESSION['username'].'"';
							$query = mysqli_query($koneksi,$sql);
							while($data = mysqli_fetch_array($query)){
								
				?>
                  <span class="hidden-xs"><b><?php echo $data ['username']; ?></b></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../model/dist/img/user2-160x160.png" class="img-circle" alt="User Image" />
                    <p>
                      <b><?php echo $data ['username']; ?></b>
                    </p>
                  </li>
							<?php } ?>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                  <div class="pull-left">
                      <a href="cpassword.php" class="btn btn-default btn-flat">Reset Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
