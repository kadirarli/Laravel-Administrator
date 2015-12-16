<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a class="logo" href="{{URL::route('admin_dashboard')}}">{{Config::get('administrator::administrator.title')}}</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ asset(str_replace('.png', '-50x50.png', Config::get('administrator::administrator.user')[0]->profile_photo)) }}" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Config::get('administrator::administrator.user')[0]->first_name." ".Config::get('administrator::administrator.user')[0]->last_name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset(str_replace('.png', '-198x198.png', Config::get('administrator::administrator.user')[0]->profile_photo)) }}" class="img-circle" alt="User Image" />
                            <p>
                               {{ Config::get('administrator::administrator.user')[0]->first_name." ".Config::get('administrator::administrator.user')[0]->last_name }}
                                <!--small>Member since Nov. 2012</small-->
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Sevenler</a>
                                {{ Config::get('administrator::administrator.user')[0]->followers_count }}
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sevilenler</a>
                                {{ Config::get('administrator::administrator.user')[0]->following_count }}
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Photoriums</a>
                                {{ Config::get('administrator::administrator.user')[0]->fotoriums_count }}
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
     
                                <!--a href="#" class="btn btn-default btn-flat">Profile</a-->
                                <a href="{{URL::to(Config::get('administrator::administrator.back_to_site_path', '/'))}}" class="col-xs-12 btn btn-default btn-flat" id="back_to_site">{{trans('administrator::administrator.backtosite')}}</a>
                            @if(Config::get('administrator::administrator.logout_path'))
                                    <a href="{{URL::to(Config::get('administrator::administrator.logout_path'))}}" class="col-xs-12 btn btn-default btn-flat" id="logout">{{trans('administrator::administrator.logout')}}</a>
                            @endif
                            <!--div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div-->
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>