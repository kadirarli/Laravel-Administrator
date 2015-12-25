<!DOCTYPE html>
<html lang="<?php echo Config::get('application.language') ?>">
    <head>
        <meta charset="UTF-8">
        <title>{{ Config::get('administrator::administrator.title') }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        @foreach ($css as $url)
            <link href="{{$url}}" media="all" type="text/css" rel="stylesheet">
        @endforeach
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            @include('administrator::partials.header-lte')
            @include('administrator::partials.sidebar-lte')
            <div class="content-wrapper">
                <section class="content">
                    @yield('content')
                        <div id="wrapper">
                            {{ $content }}
                        </div>
                        @foreach ($js as $url)
                            <script src="{{$url}}"></script>
                        @endforeach
                </section>
            </div>
            @include('administrator::partials.footer-lte')
        </div>
    </body>
</html>