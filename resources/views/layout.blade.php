<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    @yield('header')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
</body>
</html>
