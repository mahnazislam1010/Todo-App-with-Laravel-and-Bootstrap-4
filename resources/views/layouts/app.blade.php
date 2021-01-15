<!doctype html>
<html lang="en">
<head>
{{--    CSRF TOKEN--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--    Scripts--}}
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

    {{--    CSS--}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Todo App</title>
</head>
<body>
    @yield('content')
</body>
</html>
