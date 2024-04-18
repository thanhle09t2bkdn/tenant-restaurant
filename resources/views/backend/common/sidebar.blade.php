@php
    $route = request()->route();
@endphp

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Novel Saw</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    @if(Auth::user()->role == \App\Models\User::ADMIN_ROLE)
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>
        <li class="nav-item">
            <a class="nav-link {{ $route->named('backend.users*') ? 'active' : '' }}" href="{{ route('backend.users.index') }}">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Users</span></a>
        </li>
    @endif
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
