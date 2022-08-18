<aside class="main-sidebar sidebar-dark-primary elevation-4">
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">Toukir Ahmed (Admin)</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
           
            
          </li>
         
          <li class="nav-item">
            <a href="{{route('about-list')}}" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                About
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{route('blogs-list')}}" class="nav-link">
              <i class="nav-icon fa fa-file-image"></i>
              <p>
                Blogs
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('show-list')}}" class="nav-link">
              <i class="nav-icon fa fa-file-image"></i>
              <p>
                Shows
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('awards-list')}}" class="nav-link">
              <i class="nav-icon fa fa-trophy"></i>
              <p>
                Awards
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('achivement-list')}}" class="nav-link">
              <i class="nav-icon fa fa-trophy"></i>
              <p>
                Achivements
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('contact-list')}}" class="nav-link">
              <i class="nav-icon fa fa-envelope-open"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
