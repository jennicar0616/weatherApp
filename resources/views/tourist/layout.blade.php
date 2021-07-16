<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Weather App</title>


    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('weather-icons-master/css/weather-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('weather.css') }}">

</head>
<body>
<header class="head-main container-sm">
  <div class="navbar box-shadow">
    <div class="container d-flex justify-content-between text-white">
      <span class="navbar-brand d-flex align-items-center">
        <strong>Weather App</strong>
      </span>
      <a class="nav-button ml-auto mr-4"><span id="nav-icon3"><span></span><span></span><span></span><span></span></span></a>
    </div>
  </div> <!--navbar end-->

  <div class="fixed-top main-menu">
    <div class="flex-center p-5 mb-5">
      <ul class="nav flex-column">
        <li class="nav-item delay-1"><a class="city nav-link" id="1850147" href="{{ route('tourist.home') }}">Tokyo</a></li>
        <li class="nav-item delay-2"><a class="city nav-link" id="2127436" href="{{ route('tourist.home') }}">Yokohama</a></li>
        <li class="nav-item delay-3"><a class="city nav-link" id="1857910" href="{{ route('tourist.home') }}">Kyoto</a></li>
        <li class="nav-item delay-4"><a class="city nav-link" id="1853908" href="{{ route('tourist.home') }}">Osaka</a></li>
        <li class="nav-item delay-5"><a class="city nav-link" id="2128295" href="{{ route('tourist.home') }}">Sapporo</a></li>
        <li class="nav-item delay-6"><a class="city nav-link" id="1856057" href="{{ route('tourist.home') }}">Nagoya</a></li>
      </ul>
    </div>
  </div> <!--main-menu end-->
</header>



<div>@yield('content')</div>

<script type="text/javascript">
    $(document).ready(function(){
      $('.nav-button').click(function(){
        $('body').toggleClass('nav-open');
      });
    });
</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>


