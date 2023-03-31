<?php 
$currentURL = request()->path();
$routeName = \Request::route()->getName();
$seo = DB::table('seo')->Where('url',  $currentURL)->first();
$analytics = DB::table('analytics')->get();
if($routeName == "broker.review"){
    $slug = str_replace('broker-review/','',$currentURL);
    $broker = DB::table('broker_review')->Where('slug',  $slug)->first();
    $image = asset('images/' . json_decode($broker->logo_image)[0]);
} elseif($routeName == "blog.details"){
    $slug = str_replace('blog/','',$currentURL);
    $blog = DB::table('blog')->Where('slug',  $slug)->first();
    $image = asset('images/' . json_decode($blog->image)[0]);
} else{
    $image = asset('assets/images/forexprop.png');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/frontend')}}.png" type="image/x-icon">
    @if(!empty($seo->title))
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="{{ isset($seo->title) ?  $seo->title : '' }}">
    <meta property="og:description" content="{{ isset($seo->description) ?  $seo->description : '' }}">
    <meta name="keywords" content="{{ isset($seo->keyword) ?  $seo->keyword : '' }}">
    @endif
    @seoTags()
    <meta/>
    <meta property="" content="" />
    <title></title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- font-awesome.min CSS -->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <!-- owl CSS -->
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.green.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    @isset($analytics[0])<?php print_r($analytics[0]->analytics_code); ?>@endisset

</head>

<!-- Header Start -->
<body>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('assets')}}/images/TopAsiaFX.png" alt="brand logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/*') ? 'active' : '' }} " aria-current="page" href="\">Home</a>
            </li>         
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Brokers
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ url('asian_broker-review')}}">Asian Brokers</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{ url('australian_broker-review')}}">Australian Brokers</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{ url('african_broker-review')}}">African Brokers</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{ url('canadian_broker-review')}}">Canadian Brokers</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{ url('europian_broker-review')}}">Europian Brokers</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{ url('middle_east_broker-review')}}">Middle-East Brokers</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{ url('us_broker-review')}}">US Brokers</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{ url('uk_broker-review')}}">UK Brokers</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Bonuses
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{url('deposit_bonuses')}}">Deposit Bonus</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{url('welcome_bonuses')}}">Welcome Bonus</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Contests
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{url('demo_contest')}}">Demo Contest</a></li>
                <hr class="dropdown-divider" role="separator">
                <li><a class="dropdown-item" href="{{url('live_contest')}}">Live Contest</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="{{ Request::is('about-us') ? 'active' : '' }} nav-link" href="{{ url('about-us') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="{{ Request::is('contact-us') ? 'active' : '' }} nav-link" href="{{ url('contact-us') }}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="{{ Request::is('blog') ? 'active' : '' }} nav-link" href="{{ url('blog') }}">BLogs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



