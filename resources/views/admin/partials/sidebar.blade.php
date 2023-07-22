<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('layouts.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ __('welcome.title') }}</div>    
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

    <li class="nav-item menu-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ __('welcome.user') }}</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('users.index') }}">{{ __('welcome.user_list') }}</a>
                <a class="collapse-item" href="{{ route('users.create') }}">{{ __('welcome.user_create') }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item menu-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRole"
            aria-expanded="true" aria-controls="collapseRole">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ __('welcome.role') }}</span>
        </a>
        <div id="collapseRole" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('roles.index') }}">{{ __('welcome.role_list') }}</a>
                <a class="collapse-item" href="{{ route('roles.create') }}">{{ __('welcome.role_create') }}</a>
            </div>
        </div>
    </li>


    <li class="nav-item menu-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePermission"
            aria-expanded="true" aria-controls="collapsePermission">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ __('welcome.permission') }}</span>
        </a>
        <div id="collapsePermission" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item"
                    href="{{ route('permissions.index') }}">{{ __('welcome.permission_list') }}</a>
                <a class="collapse-item"
                    href="{{ route('permissions.create') }}">{{ __('welcome.permission_create') }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item menu-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
            aria-expanded="true" aria-controls="collapseProduct">
            <i class="fas fa-fw fa-list"></i>
            <span>{{ __('welcome.product') }}</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('products.index') }}">{{ __('welcome.product_list') }}</a>
                <a class="collapse-item" href="{{ route('products.create') }}">{{ __('welcome.product_create') }}</a>

            </div>
        </div>
    </li>

    <li class="nav-item menu-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuggest"
            aria-expanded="true" aria-controls="collapseSuggest">
            <i class="fas fa-fw fa-list"></i>
            <span>{{ __('welcome.suggest') }}</span>
        </a>
        <div id="collapseSuggest" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('suggests.index') }}">{{ __('welcome.suggest_list') }}</a>
                <a class="collapse-item" href="{{ route('suggests.create') }}">{{ __('welcome.suggest_create') }}</a>

            </div>
        </div>
    </li>

    <li class="nav-item menu-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDevice"
            aria-expanded="true" aria-controls="collapseDevice">
            <i class="fas fa-fw fa-list"></i>
            <span>{{ __('welcome.device') }}</>
        </a>
        <div id="collapseDevice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('devices.index') }}">{{ __('welcome.device_list') }}</a>
                <a class="collapse-item" href="{{ route('devices.create') }}">{{ __('welcome.device_create') }}</a>

            </div>
        </div>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>


