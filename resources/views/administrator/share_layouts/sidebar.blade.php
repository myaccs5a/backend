<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                <a class="sidebar-link sidebar-link" href="{{route('admin.dashboard')}}" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <!-- <li class="nav-small-cap"><span class="hide-menu">Authentication admin</span></li> -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-user" ></i>

                        <span class="hide-menu"> Quản lí quản trị</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('browserAdmin')}}" class="sidebar-link">
                                <span class="hide-menu"> Tài khoản quản trị </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('browserRole')}}" class="sidebar-link">
                                <span class="hide-menu"> Vai trò quản trị </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i  class="far fa-building"></i>
                        <span class="hide-menu"> Quản lý công ty</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('company.index')}}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách công ty </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i  class="icon icon-people"></i>
                        <span class="hide-menu"> Quản lý người dùng</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('browser.user')}}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách người dùng </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i  class="icon icon-list"></i>
                        <span class="hide-menu"> Quản lý tin tuyển dụng</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('browser.job')}}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách tin </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i  class="icon icon-settings"></i>
                        <span class="hide-menu"> Cài đặt chung</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('browser.web')}}" class="sidebar-link">
                                <span class="hide-menu"> Cài đặt </span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
