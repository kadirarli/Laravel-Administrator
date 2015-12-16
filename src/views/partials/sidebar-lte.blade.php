<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset(str_replace('.png', '-50x50.png', Config::get('administrator::administrator.user')[0]->profile_photo)) }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Config::get('administrator::administrator.user')[0]->first_name." ".Config::get('administrator::administrator.user')[0]->last_name }}</p>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!--form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form-->
        <!-- /.search form -->
       
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="item"><a href="{{URL::to(Config::get('administrator::administrator.back_to_site_path', '/'))}}" id="back_to_site">{{trans('administrator::administrator.backtosite')}}</a></li>
            <li class="header">MENÜ</li>
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
            <!-- Optionally, you can add icons to the links -->
            <!--li class="active"><a href="#"><span>Link</span></a></li>
            <li><a href="#"><span>Another Link</span></a></li>
            <li class="treeview">
                <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li-->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>