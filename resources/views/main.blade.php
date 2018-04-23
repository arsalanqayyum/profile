<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tajem Master free html5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <link rel="stylesheet" href="{{asset('css/fonticons.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />

    <script src="{{asset('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<div class="culmn">
@include('topnav')

@yield('content')

@include('footer')
</div>
</body>

<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.masonry.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>

<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</html>