<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('assets/img/logo.png')}}" alt="" style="width: 80%">
        </div>
        <div class="sidebar-brand-text mx-3"> Nama Partner </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->


    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Route::current()->getName() == 'dashboard.order.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/order') }}">
            <i class="fas fa-fw fa-shop"></i>
            <span>Order</span></a>
    </li>
    <li class="nav-item {{ Route::current()->getName() == 'dashboard.transaction.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/transaction') }}">
            <i class="fas fa-fw fa-money-bill"></i>
            <span>Transaction</span></a>
    </li>
    {{-- <li class="nav-item {{ Route::current()->getName() == 'dashboard.history.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/history') }}">
            <i class="fas fa-history"></i>
            <span>Order History</span></a>
    </li> --}}
    <li class="nav-item {{ Route::current()->getName() == 'dashboard.review.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/review') }}">
            <i class="fas fa-fw fa-star"></i>
            <span>Review</span></a>
    </li>
    <li class="nav-item {{ Route::current()->getName() == 'dashboard.activation.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/activation') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Activation</span></a>
    </li>
    <li class="nav-item {{ Route::current()->getName() == 'dashboard.profile.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard/profile') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Profile</span></a>
    </li>

    {{-- <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ url('dashboard/buttons') }}">Buttons</a>
                <a class="collapse-item" href="{{ url('dashboard/cards') }}">Cards</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{ url('dashboard/utilities-color') }}">Colors</a>
                <a class="collapse-item" href="{{ url('dashboard/utilities-border') }}">Borders</a>
                <a class="collapse-item" href="{{ url('dashboard/utilities-animation') }}">Animations</a>
                <a class="collapse-item" href="{{ url('dashboard/utilities-other') }}">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{ url('dashboard/login') }}">Login</a>
                <a class="collapse-item" href="{{ url('dashboard/register') }}">Register</a>
                <a class="collapse-item" href="{{ url('dashboard/forgot-password') }}">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="{{ url('dashboard/404') }}">404 Page</a>
                <a class="collapse-item" href="{{ url('dashboard/blank') }}">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard/charts') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard/table') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}

</ul>
<!-- End of Sidebar -->
