<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"></li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>

                @if(auth()->user()->user_type == 1 || auth()->user()->user_type == 2 )
                    <li class="mt-2">
                        <a href="{{ route('users.index') }}" class="{{ request()->is('admin/users*') ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-users"></i>
                            User Management
                        </a>
                    </li>
                @endif

                <li class="mt-2">
                    <a href="{{ route('projects.index') }}" class="{{ request()->is('admin/projects*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Project Management
                    </a>
                </li>

                @if(auth()->user()->user_type == 1 || auth()->user()->user_type == 2)
                    <li class="mt-2">
                        <a href="{{ route('seo-features.index') }}" class="{{ request()->is('admin/seo-features*') ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-settings"></i>
                            SEO Data Management
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
