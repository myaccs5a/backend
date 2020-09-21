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
                            <a href="{{route('index.role')}}" class="sidebar-link">
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
                            <a href="{{route('index.company')}}" class="sidebar-link">
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
                        <i class="fa fa-language" aria-hidden="true"></i>
                        <span class="hide-menu"> Quản lý ngôn ngữ</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('language-admin')}}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách ngôn ngữ  </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa fa-briefcase"></i>
                        <span class="hide-menu"> Quản lý Ngành nghề</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('job-category')}}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách Ngành nghề  </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-money-bill-alt"></i>
                        <span class="hide-menu"> Quản lý Thanh Toán</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('payment-admin')}}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách Thanh toán  </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa fa-location-arrow"></i>
                        <span class="hide-menu"> Quản lý Khu vực</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{route('zones-admin')}}" class="sidebar-link">
                                <span class="hide-menu"> Danh sách khu vực </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('add-zones')}}" class="sidebar-link">
                                <span class="hide-menu"> Tạo mới khu vực </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{route('browser.web')}}" aria-expanded="false">
                        <i class="fas fa-address-card"></i>
                        <span class="hide-menu">Giới thiệu website</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{route('contact.index')}}" aria-expanded="false">
                        <i class="fas fa-address-book"></i>
                        <span class="hide-menu">Liên hệ </span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{route('browser.web')}}" aria-expanded="false">
                        <i  class="icon icon-settings"></i>
                        <span class="hide-menu">Cài đặt chung</span>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
