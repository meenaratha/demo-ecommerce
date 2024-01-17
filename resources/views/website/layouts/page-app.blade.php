
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs
         ============================================ -->
    <title>TopDeal</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <!-- Mobile specific metas
         ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon
         ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('website/ico/favicon-16x16.png') }}" />
    <!-- Libs CSS
         ============================================ -->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('website/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/minicolors/miniColors.css') }}" rel="stylesheet">
    <link href="{{ asset('website/js/slick-slider/slick.css') }}" rel="stylesheet">
    <!-- Theme CSS
         ============================================ -->
    <link href="{{ asset('website/css/themecss/so_searchpro.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/themecss/so-newletter-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/footer/footer1.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/header/header1.css') }}" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('website/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('website/css/quickview/quickview.css') }}  " rel="stylesheet">
    <!-- Google web fonts
         ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: Roboto, sans-serif;
        }
    </style>
</head>

<body class="res layout-1">
 <div id="wrapper" class="wrapper-fluid banners-effect-10">

 <!-- Include your navigation bar or header content here -->
 @include('website.partials.product-header')



 <!-- Content specific to each page will be injected here -->
 @yield('content')




<!-- Include your footer content here -->
@include('website.partials.product-footer')

 </div>
  <!-- End Color Scheme
       ============================================ -->
       <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
  <!-- Include Libs & Plugins
       ============================================ -->

  <!-- Include Libs & Plugins
       ============================================ -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="{{ asset('website/js/jquery-2.2.4.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/so_megamenu.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/owl-carousel/owl.carousel.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/slick-slider/slick.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/libs.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/unveil/jquery.unveil.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/countdown/jquery.countdown.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/datetimepicker/moment.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/jquery-ui/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/modernizr/modernizr-2.6.2.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/minicolors/jquery.miniColors.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/jquery.nav.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/quickview/jquery.magnific-popup.min.js')}}"></script>
  <!-- Theme files
       ============================================ -->
  <script type="text/javascript" src="{{ asset('website/js/themejs/application.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/homepage.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/custom_h3.js')}}"></script>
  <script type="text/javascript" src="{{ asset('website/js/themejs/addtocart.js')}}"></script>
</body>

</html>
