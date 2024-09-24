                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
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
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                @can('dashboard')
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="index.html" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard Example 1
                                    </a>
                                </li>
                                @endcan
                                <li class="app-sidebar__heading">UI Components</li>
                                @can('productlist')
                                <li>
                                    <a href="{{route('product.index')}}">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Product
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                   
                                </li>
                                @endcan
                                <li>
                                    <a href="{{route('category.index')}}">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        category
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                   
                                </li>
                                <li>
                                    <a href="{{route('User.index')}}">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        User
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                   
                                </li>
                                <li>
                                    <a href="{{route('role.index')}}">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Role
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                   
                                </li>
                                <li>
                                    <a href="{{route('permission.index')}}">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Permission
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    