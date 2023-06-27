<!DOCTYPE html>
<html lang="en">
<head>
    <title content="">Tabira Gate</title>
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">--}}

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="Tabira Gate" >
    <meta name="description" content="Tabira Gate " >
    <meta name="author" content="Yasoua Bhnan">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{asset('images/Tabira_Gate_Logo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/Tabira_Gate_Logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/Tabira_Gate_Logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/Tabira_Gate_Logo.png')}}">

    <!-- CSS -->


    <!-- FLEXSLIDER SLIDER CSS -->
{{--    <link rel="stylesheet" type="text/css" href="css/flexslider.css"  >--}}

    <!-- BOOTSTRAP -->
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}" />


    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS -->
    <link rel="stylesheet" href="{{asset('css/icons-fonts.css')}}" >

    <!-- CSS THEME -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >

    <!-- ANIMATE -->
{{--    <link rel='stylesheet' href="css/animate.min.css">--}}

    <!-- IE Warning CSS -->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{{asset('css/ie-warning.css')}}" ><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{{asset('css/ie8-fix.css')}}" ><![endif]-->

    <!-- Magnific popup  in style.css	Owl Carousel Assets in style.css -->

    <!-- CSS end -->

    <!-- JS begin some js files in bottom of file-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->

    <!-- Modernizr -->
    <!-- <script src="js/modernizr.js"></script> -->

</head>
<body>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>--}}

<!-- LOADER -->
{{--<div id="loader-overflow">--}}
{{--    <div id="loader3">Please enable JS</div>--}}
{{--</div>--}}

{{--<div id="wrap" class="boxed ">--}}
{{--    <div class="grey-bg"> <!-- Grey BG  -->--}}

<!--[if lte IE 8]>
        <div id="ie-container">
            <div id="ie-cont-close">
                <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
            </div>
            <div id="ie-cont-content" >
                <div id="ie-cont-warning">
                    <img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
                </div>
                <div id="ie-cont-text" >
                    <div id="ie-text-bold">
                        You are using an outdated browser
                    </div>
                    <div id="ie-text">
                        For a better experience using this site, please upgrade to a modern web browser.
                    </div>
                </div>
                <div id="ie-cont-brows" >
                    <a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
                    <a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
                    <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
                    <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
                </div>
            </div>
        </div>
        <![endif]-->

<!-- HEADER 1 NO-TRANSPARENT -->
@include('components.header')
{{--<div id="wrap" class="boxed ">--}}
{{--    <div class="grey-bg"> <!-- Grey BG  -->--}}
                    @yield('content')
<!-- FOOTER 2 -->
@include('components.footer')
{{--    </div>--}}
{{--</div>--}}

<!-- BACK TO TOP -->
<p id="back-top" class="rounded-circle">
    <a href="#top" title="Back to Top" class="rounded-circle"><span class="icon icon-arrows-up"></span></a>
</p>

{{--</div><!-- End BG -->--}}
{{--</div><!-- End wrap -->--}}
                    <!-- JS begin -->

                    <!-- jQuery  -->
{{--                    <script src="js/jquery-1.11.2.min.js"></script>--}}

                    <!-- Include all compiled plugins (below), or include individual files as needed -->
{{--                    <script src="js/bootstrap.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>--}}


                    <!-- MAGNIFIC POPUP -->
{{--                    <script src='js/jquery.magnific-popup.min.js'></script>--}}

                    <!-- PORTFOLIO SCRIPTS -->
{{--                    <script src="js/isotope.pkgd.min.js"></script>--}}
{{--                    <script src="js/imagesloaded.pkgd.min.js"></script>--}}
{{--                    <script src="js/masonry.pkgd.min.js"></script>--}}

                    <!-- COUNTER -->
{{--                    <script src="js/jquery.countTo.js"></script>--}}

                    <!-- APPEAR -->
{{--                    <script src="js/jquery.appear.js"></script>--}}

                    <!-- OWL CAROUSEL -->
{{--                    <script src="js/owl.carousel.min.js"></script>--}}

                    <!-- JQUERY TWEETS -->
{{--                    <script src="js/twitter/jquery.tweet.js"></script>--}}

                    <!-- MAIN SCRIPT -->
{{--                    <script src="js/main.js"></script>--}}

                    <!-- FLEX SLIDER SCRIPTS  -->
{{--                    <script src="js/jquery.flexslider-min.js"></script>--}}
{{--                    <script src="js/flex-slider.js"></script>--}}

                    <!-- JS end -->
</body>

<!-- jquery 3.6.4 -->
<script src="{{ asset('assets/js/jquery-3-6-4.min.js') }}"></script>

<!-- bootstrap 5.3 -->
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

<!-- sweet alert -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- iconify -->
<script src="{{ asset('assets/js/iconify.min.js') }}"></script>

<script>
    function swalMessage (ntficon,messagetoshow) // used to show the notification messages --- "ntficon" receives the icon that needed to show with the message --- "messagetoshow" receives the message itself.
    {
        Swal.fire({
            icon: ntficon,
            text: messagetoshow,
            toast: true,
            position: 'top-end',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false,
            customClass: {
                confirmButton: 'btn btn-primary',
            },
            showClass: {
                popup: 'swal2-noanimation',
                backdrop: 'swal2-noanimation'
            },

        })
    }

    @if(session()->has('flash_icon') && session()->has('flash_message'))
    swalMessage("{{ session('flash_icon') }}", "{{ session('flash_message') }}");
    {{ session()->forget('flash_icon') }}
    {{ session()->forget('flash_message') }}
    @endif

</script>

