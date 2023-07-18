<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('layouts.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Quản trị Website</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('layouts.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-cog"></i>
            <span>User</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('users.index') }}">Danh sách User</a>
                <a class="collapse-item" href="{{ route('users.create') }}">Tạo mới User</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRole"
            aria-expanded="true" aria-controls="collapseRole">
            <i class="fas fa-fw fa-cog"></i>
            <span>Roles</span>
        </a>
        <div id="collapseRole" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('roles.index') }}">Danh sách Role</a>
                <a class="collapse-item" href="{{ route('roles.create') }}">Tạo mới Role</a>
            </div>
        </div>
    </li>

    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePermission"
            aria-expanded="true" aria-controls="collapsePermission">
            <i class="fas fa-fw fa-cog"></i>
            <span>Permission</span>
        </a>
        <div id="collapsePermission" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('permissions.index') }}">Danh sách Permission</a>
                <a class="collapse-item" href="{{ route('permissions.create') }}">Tạo mới Permission</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
            aria-expanded="true" aria-controls="collapseProduct">
            <i class="fas fa-fw fa-list"></i>
            <span>Sản phẩm</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('products.index') }}">Danh sách Sản phẩm</a>
                <a class="collapse-item" href="{{ route('products.create') }}">Tạo mới Sản phẩm</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuggest"
            aria-expanded="true" aria-controls="collapseSuggest">
            <i class="fas fa-fw fa-list"></i>
            <span>Quản lý đề xuất</span>
        </a>
        <div id="collapseSuggest" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('suggests.index') }}">Danh sách đề xuất</a>
                <a class="collapse-item" href="{{ route('suggests.create') }}">Tạo mới đề xuất</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDevice"
            aria-expanded="true" aria-controls="collapseDevice">
            <i class="fas fa-fw fa-list"></i>
            <span>Quản lý thiết bị</span>
        </a>
        <div id="collapseDevice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('devices.index') }}">Danh sách thiết bị</a>
                <a class="collapse-item" href="{{ route('devices.create') }}">Tạo mới thiết bị</a>

            </div>
        </div>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider"
            aria-expanded="true" aria-controls="collapseSlider">
            <i class="fas fa-fw fa-bars"></i>
            <span>Slider</span>
        </a>
        <div id="collapseSlider" class="collapse" aria-labelledby="headingPost" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="Slider-color.html">Colors</a>
                <a class="collapse-item" href="Slider-border.html">Borders</a>
                <a class="collapse-item" href="Slider-animation.html">Animations</a>
                <a class="collapse-item" href="Slider-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    {{-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cài đặt</span></a>
    </li> --}}


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
