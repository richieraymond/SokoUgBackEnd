<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'PMonitor') }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ace-rtl.min.css') }}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ asset('js/ace-extra.min.js') }}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-timepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-colorpicker.min.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ace-rtl.min.css') }}" />

    <!--[if lte IE 9]>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ asset('js/ace-extra.min.js') }}"></script>

    <!--[endif]-->
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="{{ url('/home') }}" class="navbar-brand">
                <small>
                    <i class="fa fa-shopping-basket"></i>
                    {{ config('app.name', 'PMonitor') }} Uganda
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-tasks"></i>
                        <span class="badge badge-grey">1</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-check"></i>
                            1 Task to complete
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:65%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See tasks with details
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important">1</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                            1 Notification
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See all notifications
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">1</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-envelope-o"></i>
                            1 Message
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="inbox.html">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="{{ asset('images/'.Auth::user()->photo) }}" alt="Jason's Photo" />
                        <span class="user-info">
									<small>Welcome,</small>
                                        {{ Auth()->user()->firstName }}
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('profile/') }}">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>
                        @if (Auth::guest())
                            <li><a href="">Login</a></li>
                            <li><a href="">Register</a></li>
                        @else
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="">
                <a href="{{ url('/home') }}">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text">
								Users
							</span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>

                <ul class="submenu">

                    <li class="">
                        <a href="{{ url('/admins/create') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add New
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/admins/') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View Registered
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-fort-awesome"></i>
                    <span class="menu-text"> Companies </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{ url('/companies/create') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add New
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/companies/') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View Registered
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-fort-awesome"></i>
                    <span class="menu-text">Products</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{ url('/products/create') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            New product
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{ url('/categories/create') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            New category
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/categories/') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View Categories
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{ url('/subcategories/create') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            New Subcategory
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/subcategories/') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View Sub Categories
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-money"></i>
                    <span class="menu-text">Subscriptions</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{ url('/activesubscriptions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Active
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/pendingsubscriptions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pending
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/expiredsubscriptions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Expired
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-product-hunt"></i>
                    <span class="menu-text">Promotion Packages</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{ url('/promotions/create') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add New
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/promotions/') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View Packages
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-sellsy"></i>
                    <span class="menu-text"> Transactions </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{ url('/pendingtransactions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pending
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/completetransactions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Complete
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{ url('/canceledtransactions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Canceled
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-shopping-basket"></i>
                    <span class="menu-text"> Orders </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{ url('/pendingtransactions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pending
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/completetransactions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Complete
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{ url('/canceledtransactions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Canceled
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-location-arrow"></i>
                    <span class="menu-text">Locations</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="{{ url('/countries') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Countries
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{ url('/regions') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Regions
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{ url('/districts') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Districts
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="{{ url('/towns') }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Towns
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-word-o"></i>
                    <span class="menu-text">
                        Reports
                    </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="tables.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Locations
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="jqgrid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Products
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="jqgrid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Orders
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="jqgrid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Payments
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>

                    <div class="ace-settings-box clearfix" id="ace-settings-box">
                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hide">
                                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                <label class="lbl" for="ace-settings-add-container">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        @yield('content');
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">{{ config('app.name', 'PMonitor') }}</span>
							Uganda &copy; @php echo date('Y') @endphp
						</span>
                <span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->
<!-- basic scripts -->
<!--[if !IE]> -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="{{ asset('js/ace-elements.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('js/spinbox.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('js/jquery.knob.min.js') }}"></script>
<script src="{{ asset('js/autosize.min.js') }}"></script>
<script src="{{ asset('js/jquery.inputlimiter.min.js') }}"></script>
<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-tag.min.js') }}"></script>
<!-- page specific plugin scripts -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.bootstrap.min.js') }} "></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/buttons.flash.min.js') }} "></script>
<script src="{{ asset('js/buttons.html5.min.js') }} "></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/buttons.colVis.min.js') }} "></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>


<!-- ace scripts -->
<script src="{{ asset('js/ace-elements.min.js') }}"></script>
<script src="{{ asset('js/ace.min.js') }}"></script>

<!-- inline scripts related to this page -->
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $('[data-rel=tooltip]').tooltip({container:'body'});
        $('[data-rel=popover]').popover({container:'body'});

        autosize($('textarea[class*=autosize]'));

        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        

        $( "#input-size-slider" ).css('width','200px').slider({
            value:1,
            range: "min",
            min: 1,
            max: 8,
            step: 1,
            slide: function( event, ui ) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
            }
        });
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true
        })
        //show datepicker when clicking on the icon
            .next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
    $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
        var $row = $(this).closest('tr');
        if($row.is('.detail-row ')) return;
        if(this.checked) $row.addClass(active_class);
        else $row.removeClass(active_class);
    });
    $('#country').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'GET',
                    url:'/ajax-region',
                    data:'country_id='+countryID,
                    success:function(html){
                        $.each(html,function(createdistrict,regionObj){
                            $('#region').append('<option value="'+regionObj.id+'">'+regionObj.name+'</option>');

                        });
                    }
                });
            }else{
            }
    });
    $('#region').on('change',function(){
            var regionID = $(this).val();
            if(regionID){
                $.ajax({
                    type:'GET',
                    url:'/ajax-district',
                    data:'region_id='+regionID,
                    success:function(html){
                        $.each(html,function(createdistrict,districtObj){
                            $('#district').append('<option value="'+districtObj.id+'">'+districtObj.name+'</option>');

                        });
                    }
                });
            }else{
            }
    });
});
</script>
</body>
</html>
