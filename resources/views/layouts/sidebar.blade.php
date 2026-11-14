<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="brand-link">
            <span class="brand-text fw-light">UTS – 2410010305</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('mata-kuliah.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('mata-kuliah.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-database"></i>
                        <p>
                            Data Master
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('mata-kuliah.index') }}" class="nav-link {{ request()->routeIs('mata-kuliah.*') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Mata Kuliah</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>



