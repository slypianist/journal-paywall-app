<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="news/images/favi-icon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Journal Africa Newspaper</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/news/css/bootstrap.min.css')}}">
    <!-- Scrollbar css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/news/css/jquery.mCustomScrollbar.css')}}" />
    <!-- Owl Carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/news/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/news/owl-carousel/owl.theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/news/owl-carousel/owl.transitions.css')}}" />
    <!-- youtube css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/news/css/RYPP.css')}}" />
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="{{asset('assets/news/css/jquery-ui.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/news/css/animate.min.css')}}">
    <!-- fonts css -->
    <link rel="stylesheet" href="{{asset('assets/news/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/news/css/Pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/news/css/flaticon.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/news/css/style.css')}}">
</head>
<div class="se-pre-con"></div>

<body>
    {{-- @include('includes.news.home-header') --}}
@yield('h-content')
@include('includes.news.footer')
</body>

</html>

