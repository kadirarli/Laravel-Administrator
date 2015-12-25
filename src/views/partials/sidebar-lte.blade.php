<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <?php if(isset(Config::get('administrator::administrator.user')[0]->profile_photo)){ ?>
                    <img src="{{ asset(str_replace('.png', '-50x50.png', Config::get('administrator::administrator.user')[0]->profile_photo)) }}" class="img-circle" alt="User Image" />
                <?php } ?>
            </div>
            <div class="pull-left info">
                <?php if(isset(Config::get('administrator::administrator.user')[0]->name)){ ?>
                    <p>{{ Config::get('administrator::administrator.user')[0]->name." ".Config::get('administrator::administrator.user')[0]->surname }}</p>
                    <small>{{Config::get('administrator::administrator.user')[0]->role}}</small>
                <?php } ?>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="item"><a href="{{URL::to(Config::get('administrator::administrator.back_to_site_path', '/'))}}" id="back_to_site">{{trans('administrator::administrator.backtosite')}}</a></li>
            <li class="header">{{mb_strtoupper(trans('administrator::administrator.menu'),'UTF-8')}}</li>
            @foreach ($menu as $key => $item)
                @if (is_array($item))
                <li class="treeview">
                    <a href="#"><span>{{$key}}</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        @foreach ($item as $k => $subitem)
                            <?php echo View::make("administrator::partials.menu_item", array(
                                'item' => $subitem,
                                'key' => $k,
                                'settingsPrefix' => $settingsPrefix,
                                'pagePrefix' => $pagePrefix
                            ))?>
                        @endforeach
                    </ul>
                </li>
                @else
                    <li class="item">
                        @if (strpos($key, $settingsPrefix) === 0)
                            <a href="{{URL::route('admin_settings', array(substr($key, strlen($settingsPrefix))))}}">{{$item}}</a>
                        @elseif (strpos($key, $pagePrefix) === 0)
                            <a href="{{URL::route('admin_page', array(substr($key, strlen($pagePrefix))))}}">{{$item}}</a>
                        @else
                            <a href="{{URL::route('admin_index', array($key))}}">{{$item}}</a>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </section>
</aside>