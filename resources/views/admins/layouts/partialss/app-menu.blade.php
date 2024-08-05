<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->

        <!-- Light Logo-->
        <a href="/admin" class="logo logo-light">
            <span class="logo-sm">
                <img src="/themes/clients/images/logo_white.png" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="/themes/clients/images/logo_white.png" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Dashboard</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/admin">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>

                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span>Tin tức</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('news.index') }}" class="nav-link">Danh sách tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('news.create') }}" class="nav-link">Thêm mới tin tức</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms2" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms2">
                        <i class="ri-file-list-3-line"></i> <span>Người dùng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">Danh sách </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.create') }}" class="nav-link">Thêm mới </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms3" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarForms3">
                        <i class="ri-file-list-3-line"></i> <span>Danh mục</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms3">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('categories.index') }}" class="nav-link">Danh sách danh mục</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.create') }}" class="nav-link">Thêm danh mục mới</a>
                            </li>
                        </ul>
                    </div>
                </li>


              

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
