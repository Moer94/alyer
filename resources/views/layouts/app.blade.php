<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="Mohammadali Erfani">
    <meta description="This is my personal blog">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
    @yield('script')
</head>
<body>
    @yield('content')
</body>
</html>