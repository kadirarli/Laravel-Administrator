<header class="main-header">
    <a class="logo" href="{{URL::route('admin_dashboard')}}">{{Config::get('administrator::administrator.title')}}</a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if(isset(Config::get('administrator::administrator.user')[0]->profile_photo)){ ?>
                            <img src="{{ asset(str_replace('.png', '-50x50.png', Config::get('administrator::administrator.user')[0]->profile_photo)) }}" class="user-image" alt="User Image"/>
                        <?php } ?>
                        <?php if(isset(Config::get('administrator::administrator.user')[0]->name)){ ?>
                            <span class="hidden-xs">{{ Config::get('administrator::administrator.user')[0]->name." ".Config::get('administrator::administrator.user')[0]->surname }}</span>
                        <?php } ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <?php if(isset(Config::get('administrator::administrator.user')[0]->profile_photo)){ ?>
                                <img src="{{ asset(str_replace('.png', '-198x198.png', Config::get('administrator::administrator.user')[0]->profile_photo)) }}" class="img-circle" alt="User Image" />
                            <?php } ?>
                            <p>
                            <?php if(isset(Config::get('administrator::administrator.user')[0]->name)){ ?>
                               {{ Config::get('administrator::administrator.user')[0]->name." ".Config::get('administrator::administrator.user')[0]->surname.' - '.Config::get('administrator::administrator.user')[0]->role}}
                            <?php } ?>
                            <?php if(isset(Config::get('administrator::administrator.user')[0]->profile_photo)){ ?>
                                <small>{{trans('administrator::administrator.member_since',array('date'=>date("M. Y", strtotime(Config::get('administrator::administrator.user')[0]->created_at))))}} </small>
                            <?php } ?>
                            </p>
                        </li>
                        <li class="user-footer">
                            <p>
                                @if (count(Config::get('administrator::administrator.locales')) > 0)
                                    <span class="col-xs-2 btn btn-success btn-flat">{{Config::get('app.locale')}}</span>
                                    @if (count(Config::get('administrator::administrator.locales')) > 1)
                                        <!--ul class="dropdown-menu"-->
                                            @foreach (Config::get('administrator::administrator.locales') as $lang)
                                                @if (Config::get('app.locale') != $lang)
                                                    <!--li class="user-footer"-->
                                                        <a class="col-xs-2 btn btn-default btn-flat" href="{{URL::route('admin_switch_locale', array($lang))}}">{{$lang}}</a>
                                                    <!--/li-->
                                                @endif
                                            @endforeach
                                        <!--/ul-->
                                    @endif
                                @endif
                            </p>
                            <a href="{{URL::to(Config::get('administrator::administrator.back_to_site_path', '/'))}}" class="col-xs-12 btn btn-default btn-flat" id="back_to_site">{{trans('administrator::administrator.backtosite')}}</a>
                            @if(Config::get('administrator::administrator.logout_path'))
                                <a href="{{URL::to(Config::get('administrator::administrator.logout_path'))}}" class="col-xs-12 btn btn-default btn-flat" id="logout">{{trans('administrator::administrator.logout')}}</a>
                            @endif
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>