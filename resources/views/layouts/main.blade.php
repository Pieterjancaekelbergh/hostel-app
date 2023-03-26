<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>News | Hosteller</title>

        <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
        <script src="https://www.youtube.com/player_api"></script>
        
        @vite([
            'resources/scss/preload.scss', 
            'resources/css/icomoon.css', 
            'resources/scss/libs.scss'
        ])

        @yield('styles')
    </head>
    <body>
<body>
    {{-- include header --}}
    @include('partials.header')
 
    {{-- include content --}}
    @yield('content')

    {{-- include footer --}}
    @include('partials.footer')

    @yield('scripts') 

    @vite([
        'resources/js/common.js',
        'resources/js/app.js'
    ])
    </body>
</html>