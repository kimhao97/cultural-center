<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ route('admin.dashboard') }}" class="d-block text-decoration-none position-relative">
            <img src="/assets/images/logo-icon.png" alt="logo-icon">
            <span class="logo-text fw-bold text-dark">ADMIN</span>
        </a>
        <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">MAIN</span>
            </li>
            <li class="menu-item open">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">dashboard</span>
                    <span class="title">Dashboard</span>
                    <span class="count">3</span>
                </a>
        
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.course') }}" class="menu-link {{ Request::is('admin/course') ? 'active' : '' }}">
                            Khoá học
                            <span class="hot tag">Hot</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.classroom') }}" class="menu-link {{ Request::is('admin/classroom') ? 'active' : '' }}">
                            Phòng học
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.student_comment') }}" class="menu-link {{ Request::is('admin/student-comment') ? 'active' : '' }}">
                            Nhận xét
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">OTHERS</span>
            </li>

            <li class="menu-item">
                <a href="/my-profile" class="menu-link {{ Request::is('my-profile') ? 'active' : '' }}">
                    <span class="material-symbols-outlined menu-icon">account_circle</span>
                    <span class="title">My Profile</span>
                </a>
            </li>
            
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">settings</span>
                    <span class="title">Settings</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="/account-settings" class="menu-link {{ Request::is('account-settings') ? 'active' : '' }}">
                            Account Settings
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/change-password" class="menu-link {{ Request::is('change-password') ? 'active' : '' }}">
                            Change Password
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/connections" class="menu-link {{ Request::is('connections') ? 'active' : '' }}">
                            Connections
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/privacy-policy" class="menu-link {{ Request::is('privacy-policy') ? 'active' : '' }}">
                            Privacy Policy
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/terms-conditions" class="menu-link {{ Request::is('terms-conditions') ? 'active' : '' }}">
                            Terms & Conditions
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="/logout" class="menu-link logout">
                    <span class="material-symbols-outlined menu-icon">logout</span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </aside>
</div>