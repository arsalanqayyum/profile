
<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>


    {{--<div class="sidebar-shortcuts" id="sidebar-shortcuts">
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
    </div>--}}<!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="">
                <a href="{{route('dashboard')}}">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            {{--<li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								UI &amp; Elements
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Layouts
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="top-menu.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Top Menu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Two Menus 1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Two Menus 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Default Mobile Menu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mobile Menu 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-3.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mobile Menu 3
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="typography.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Typography
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Elements
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="buttons.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Buttons &amp; Icons
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="content-slider.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Content Sliders
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="treeview.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Treeview
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="jquery-ui.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            jQuery UI
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="nestable-list.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Nestable Lists
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Three Level Menu
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="#">
                                    <i class="menu-icon fa fa-leaf green"></i>
                                    Item #1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-pencil orange"></i>

                                    4th level
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-plus purple"></i>
                                            Add Product
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-eye pink"></i>
                                            View Products
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>--}}

            <li class="">
                <a href="{{route('slider')}}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Sliders </span>


                </a>

                <b class="arrow"></b>

            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> Posts </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li>
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Add New
                        </a>

                        <b class="arrow"></b>


                    </li>

                    <li class="">
                        <a href="{{route('posts')}}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            All Posts
                        </a>

                        <b class="arrow"></b>
                    </li>



                </ul>
            </li>

            <li>
                <a href="{{route('team')}}">
                    <i class="menu-icon fa fa-group"></i>
                    <span class="menu-text">Team</span>
                </a>
            </li>
@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)
            <li>
                <a href="{{route('client')}}">
                    <i class="menu-icon fa fa-smile-o"></i>
                    <span class="menu-text">Clients</span>
                </a>
            </li>
@endif

            <li class="">
                <a href="{{route('widget')}}">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Widgets </span>
                </a>

                <b class="arrow"></b>
            </li>
@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1 || \Illuminate\Support\Facades\Auth::user()->role_id == 2)
            <li class="">
                <a href="{{route('user')}}">
                    <i class="menu-icon fa fa-calendar"></i>

                    <span class="menu-text">
								User

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
                </a>

                <b class="arrow"></b>
            </li>
            @endif

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">{{\Illuminate\Support\Facades\Route::currentRouteName()}}</a>
                    </li>
                    <li class="active">Simple &amp; Dynamic</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>
        </div>
    @if(session('message'))
        <div class="container" style="display: flow-root;">
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{session('message')}}</strong>
            </div>
        </div>
        @endif
