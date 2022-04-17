<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="public/assets/front/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="public/assets/front/images/apple-touch-icon.png">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">


    <!-- All mixt CSS for this template -->
    <link href="{{ asset('/assets/front/css/front.css') }}" rel="stylesheet">



</head>
<body>

    <div id="wrapper">
        @include('layouts.header')

        @yield('baner')

        <section class="section lb @if (!Request::is('/')) m3rem @endif">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                       @yield('content')
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                       @include('layouts.sidebar')
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        @include('layouts.footer')

    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
 <script src="{{ asset('assets/front/js/front.js') }}"></script>

</body>
</html>
