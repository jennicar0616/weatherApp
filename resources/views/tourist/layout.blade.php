<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Weather App</title>


    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('weather.css') }}">

</head>
<body>
    <div class="cities">
        <ul>
            <li><a class="city" id="1850147" href="{{ route('tourist.home') }}">Tokyo</a></li>
            <li><a class="city" id="2127436" href="{{ route('tourist.home') }}">Yokohama</a></li>
            <li><a class="city" id="1857910" href="{{ route('tourist.home') }}">Kyoto</a></li>
            <li><a class="city" id="1853908" href="{{ route('tourist.home') }}">Osaka</a></li>
            <li><a class="city" id="2128295" href="{{ route('tourist.home') }}">Sapporo</a></li>
            <li><a class="city" id="1856057" href="{{ route('tourist.home') }}">Nagoya</a></li>
        </ul>
    </div>
    <div>@yield('content')</div>

</body>
</html>


