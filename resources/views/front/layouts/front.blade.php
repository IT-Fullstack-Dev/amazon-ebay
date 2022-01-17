<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <!-- SEO Meta Tags -->
            <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
            <meta name="author" content="Inovatik">

            <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
            <meta property="og:site_name" content="" /> <!-- website name -->
            <meta property="og:site" content="" /> <!-- website link -->
            <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
            <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
            <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
            <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
            <meta property="og:type" content="article" />

            <!-- Website Title -->
            <title>site</title>
            
            <!-- Styles -->
            <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet"> -->
            <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet">

            
            
            <!-- Favicon  -->
            <link rel="icon" href="images/favicon1.png">
               
       
             @yield('styles')
    </head>

    <body data-spy="scroll" data-target=".fixed-top">
            <!-- Preloader -->
          <div class="spinner-wrapper">
                <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
                </div>
          </div>
    <!-- end of preloader -->
            @include('front.layouts.partials.header')

            @yield('content')
            
            <!-- Scripts -->

            <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/js/popper.min.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
            <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
            <script src="{{ asset('assets/js/validator.min.js') }}"></script>
            <script src="{{ asset('assets/js/scripts.js') }}"></script>

            <script src="{{ asset('assets/css/plugins/datatables/jquery.dataTables.js') }}"></script>
            <script src="{{ asset('assets/css/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
            <script src="{{ asset('assets/css/dist/js/adminlte.min.js') }}"></script>
            <script src="{{ asset('assets/css/dist/js/demo.js') }}"></script> 
            <script src="{{ asset('assets/css/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

            @yield('scripts')
    </body>
</html>