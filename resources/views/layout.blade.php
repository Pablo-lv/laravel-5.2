<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    @yield('header')
</head>
<body>
<div class="container">
    @yield('content')
</div>
    @yield('footer')
</body>
</html>
