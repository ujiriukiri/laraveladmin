<aside class="main-sidebar hidden-print ">
  <section class="sidebar" id="sidebar-scroll">
    
    <div class="user-panel">
      <div class="f-left image"><img src="assets/images/avatar-1.png" alt="User Image" class="img-circle"></div>
      <div class="f-left info">
        <p>John Doe</p>
        <p class="designation">UX Designer <i class="icofont icofont-caret-down m-l-5"></i></p>
      </div>
    </div>
    <!-- sidebar profile Menu-->
    <ul class="nav sidebar-menu extra-profile-list">
      <li>
        <a class="waves-effect waves-dark" href="profile.html">
          <i class="icon-user"></i>
          <span class="menu-text">View Profile</span>
          <span class="selected"></span>
        </a>
      </li>
      <li>
        <a class="waves-effect waves-dark" href="javascript:void(0)">
          <i class="icon-settings"></i>
          <span class="menu-text">Settings</span>
          <span class="selected"></span>
        </a>
      </li>
      <li>
        <a class="waves-effect waves-dark" href="javascript:void(0)">
          <i class="icon-logout"></i>
          <span class="menu-text">Logout</span>
          <span class="selected"></span>
        </a>
      </li>
    </ul>
    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">
      <li class="nav-level">Navigation</li>
      <li class="active treeview">
        <a class="waves-effect waves-dark" href="index.html">
          <i class="icon-speedometer"></i><span> Dashboard</span>
        </a>
      </li>
      <li class="nav-level">Components</li>
      <li class="treeview">
        <a class="waves-effect waves-dark" href="basic-table.html">
          <i class="icon-list"></i><span> Table</span>
        </a>
      </li>
      <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> User Management</span><i class="icon-arrow-down"></i></a>
        <ul class="treeview-menu">
          <li><a class="waves-effect waves-dark" href="{{ route('roles.index') }}"><i class="icon-arrow-right"></i> Roles</a></li>
          <li><a class="waves-effect waves-dark" href="{{ route('users.index') }}"><i class="icon-arrow-right"></i> Users</a></li>
        </ul>
      </li>      
      
      {{-- <li class="nav-level">More</li>
      
      <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
        <ul class="treeview-menu">
          <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
              <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
              
              <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
              <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
              <li><a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a></li>
            </ul>
          </li>
          <li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
          <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
          <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
          <li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result</a></li>
        </ul>
      </li>
      
      
      <li class="nav-level">Menu Level</li>
      
      <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
        <ul class="treeview-menu">
          <li>
            <a class="waves-effect waves-dark" href="#!">
              <i class="icon-arrow-right"></i>
              Level Two
            </a>
          </li>
          <li class="treeview">
            <a class="waves-effect waves-dark" href="#!">
              <i class="icon-arrow-right"></i>
              <span>Level Two</span>
              <i class="icon-arrow-down"></i>
            </a>
            <ul class="treeview-menu">
              <li>
                <a class="waves-effect waves-dark" href="#!">
                  <i class="icon-arrow-right"></i>
                  Level Three
                </a>
              </li>
              <li>
                <a class="waves-effect waves-dark" href="#!">
                  <i class="icon-arrow-right"></i>
                  <span>Level Three</span>
                  <i class="icon-arrow-down"></i>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a class="waves-effect waves-dark" href="#!">
                      <i class="icon-arrow-right"></i>
                      Level Four
                    </a>
                  </li>
                  <li>
                    <a class="waves-effect waves-dark" href="#!">
                      <i class="icon-arrow-right"></i>
                      Level Four
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li> --}}
    </ul>
  </section>
</aside>