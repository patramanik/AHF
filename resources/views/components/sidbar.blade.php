<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <p class="brand-logo">AHF</p>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline my-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-header">SERVICES</li>
                <li class="nav-item">
                    <a href="{{route('flats')}}" class="nav-link">
                        <p>
                            Flates
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('emailSendPage')}}" class="nav-link">
                        <p>
                            Send Email Status
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('paymentStatus')}}" class="nav-link">
                        <p>
                            Payment Status
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</aside>
