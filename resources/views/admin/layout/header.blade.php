<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <li>
                                    <!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->
                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning" id="count-notification-1"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Bạn có <span id="count-notification-2">0</span> thông báo mới</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu" id="list-notification">

                            </ul>
                        </li>
                        <li class="footer"><a href="#">Xem tất cả</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li>
                                    <!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="public/upload/users/{{ $currentAdmin->avatar }}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ $currentAdmin->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="public/upload/users/{{ $currentAdmin->avatar }}" class="img-circle" alt="User Image">
                            <p>
                                {{ $currentAdmin->name }}
                                {{-- <small>Member since Nov. 2012</small> --}}
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="admin/thong-tin" class="btn btn-default btn-flat">Thông tin</a>
                            </div>
                            <div class="pull-right">
                                <a href="admin/dang-xuat" class="btn btn-default btn-flat">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="public/upload/users/{{ $currentAdmin->avatar }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $currentAdmin->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            {{-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li> --}}


            <li>
                <a href="admin">
                <i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
                <span class="pull-right-container">
                </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-industry"></i> <span>Hãng sản xuất</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/hang-san-xuat/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/hang-san-xuat/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-database"></i> <span>Dòng sản phẩm</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/dong-san-pham/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/dong-san-pham/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-laptop"></i> <span>Sản phẩm</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/san-pham/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/san-pham/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-list-alt"></i> <span>Hóa đơn</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/hoa-don/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-image"></i> <span>Slide</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/slide/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/slide/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-user"></i> <span>Người dùng</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/nguoi-dung/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                </ul>
            </li>
            
            @if ($currentAdmin->level == 2)
            <li class="treeview">
                <a href="#"><i class="fa fa-user-secret"></i> <span>Quản trị viên</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/quan-tri-vien/danh-sach"><i class="fa fa-list"> <span>Danh sách</span></i></a></li>
                    <li><a href="admin/quan-tri-vien/them"><i class="fa fa-plus"> <span>Thêm</span></a></i></li>
                </ul>
            </li>
            @endif
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>