<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('public/assets_bdu/img/fav-icon.png') }}" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Đại học Bình Dương - Khoa học máy tính</title>

    <!-- Icon css link -->
    <link href="{{ asset('public/assets_bdu/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{ asset('public/assets_bdu/vendors/themify-icon/themify-icons.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('public/assets_bdu/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{ asset('public/assets_bdu/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets_bdu/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets_bdu/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets_bdu/vendors/animate-css/animate.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{ asset('public/assets_bdu/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{ asset('public/assets_bdu/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('public/assets_bdu/css/responsive.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
    @include('cntt_client.navigation_bar.navigation')
    
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            @yield('banner')
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Static Area =================-->
    <section class="static_area">
        <div class="container">
            <div class="static_inner">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <!--================End Static Area =================-->

    @include('cntt_client.footer.footer')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('public/assets_bdu/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('public/assets_bdu/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/js/bootstrap.min.js')}}"></script>
    <!-- Rev slider js -->
    <script src="{{asset('public/assets_bdu/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <!-- Extra plugin css -->
    <script src="{{asset('public/assets_bdu/vendors/counterup/jquery.waypoints.min.js')}}"}></script>
    <script src="{{asset('public/assets_bdu/vendors/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/counterup/apear.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/counterup/countto.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/parallaxer/jquery.parallax-1.1.3.js')}}"></script>
    <!--Tweets-->
    <script src="{{asset('public/assets_bdu/vendors/tweet/tweetie.min.js')}}"></script>
    <script src="{{asset('public/assets_bdu/vendors/tweet/script.js')}}"></script>

    <script src="{{asset('public/assets_bdu/js/theme.js')}}"></script>

</body>
</html>

