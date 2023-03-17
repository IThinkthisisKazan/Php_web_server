<html>
    <head>
        <link href="/css/app.css" rel="stylesheet" type='text/css'/>

        @if ($title)
                <title>{{ $title }}</title>
        @else
                <title>Example Laravel App</title>
        @endif
    </head>
    <body>
        <div class="header" style='text-align: center'>
            <a href="/student">Student</a> | <a href="/text">About</a>
        <hr/>
        <div class="container">
            @yield('content')
    </body>
</html>