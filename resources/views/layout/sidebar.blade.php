<div id="sidebar" class="app-sidebar" data-bs-theme="dark">

    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
                    data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image">
                        <img src="{{ asset('assets/img/user/user-13.jpg') }}" alt />
                    </div>
                    @if (Auth::check())
                        <div class="menu-profile-info">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="menu-caret ms-auto"></div>
                            </div>
                            <small>{{ Auth::user()->email }}</small>
                        </div>
                    @else
                        <div class="menu-profile-info">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    Sample Name
                                </div>
                                <div class="menu-caret ms-auto"></div>
                            </div>
                            <small>admin@example.com</small>
                        </div>
                    @endif

                </a>
            </div>
            <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Settings</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                        <div class="menu-text"> Send Feedback</div>
                    </a>
                </div>
                <div class="menu-item pb-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                        <div class="menu-text"> Helps</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div>
            <div class="menu-header">Navigation</div>

            <div class="menu-item ">
                <a href="bootstrap_5.html" class="menu-link">
                    <div class="menu-icon-img">
                        <i class="fa fa-sitemap"></i>
                    </div>
                    <div class="menu-text">Dashboard </div>
                </a>
            </div>

            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-sitemap"></i>
                    </div>
                    <div class="menu-text">User Management</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="index-2.html" class="menu-link">
                            <div class="menu-text">Add New User</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="index_v2.html" class="menu-link">
                            <div class="menu-text">View Users</div>
                        </a>
                    </div>

                </div>
            </div>



            <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-table"></i>
                    </div>
                    <div class="menu-text">Tables</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="table_basic.html" class="menu-link">
                            <div class="menu-text">Basic Tables</div>
                        </a>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-text">Managed Tables</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="table_manage.html" class="menu-link">
                                    <div class="menu-text">Default</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_buttons.html" class="menu-link">
                                    <div class="menu-text">Buttons</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_colreorder.html" class="menu-link">
                                    <div class="menu-text">ColReorder</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_fixed_columns.html" class="menu-link">
                                    <div class="menu-text">Fixed Column</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_fixed_header.html" class="menu-link">
                                    <div class="menu-text">Fixed Header</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_keytable.html" class="menu-link">
                                    <div class="menu-text">KeyTable</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_responsive.html" class="menu-link">
                                    <div class="menu-text">Responsive</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_rowreorder.html" class="menu-link">
                                    <div class="menu-text">RowReorder</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_scroller.html" class="menu-link">
                                    <div class="menu-text">Scroller</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_select.html" class="menu-link">
                                    <div class="menu-text">Select</div>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="table_manage_combine.html" class="menu-link">
                                    <div class="menu-text">Extension Combination</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>











            <div class="menu-item d-flex">
                <a href="javascript:;"
                    class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none"
                    data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
            </div>

        </div>

    </div>

</div>
<div class="app-sidebar-bg" data-bs-theme="dark"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile"
        class="stretched-link"></a></div>
