<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'User') }}</title>
    {!! Html::style('main.css') !!}
</head>
<body>
    @yield('content')
    {!! Html::script('assets/scripts/main.js') !!}    
</body>
</html>
