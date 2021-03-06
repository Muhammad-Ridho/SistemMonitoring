<!-- Brand Logo -->
<a href="#" class="brand-link">
        <img src="{{asset('template/')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ANSMO</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/home')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/userManagement')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        User Management
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/viewList')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Employee
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/absensiEmployee')}}" class="nav-link">
                    <i class="nav-icon fas fa-desktop"></i>
                    <p>
                        Absensi Karyawan
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/viewMaps')}}" class="nav-link">
                    <i class="nav-icon fas fa-map"></i>
                    <p>
                        View Maps
                    </p>
                    </a>
                </li>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->