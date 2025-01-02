<!-- Regex: ['"]public\/([a-zA-Z0-9\/\.\-_]+)['"] -->
<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->
@include('layouts.head')
<body class="index">
<div id="fb-root"></div>
<!-- header -->
@include('layouts.header')
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">DKT Store</h1>
    <!-- category product -->
    <div class="slideshow">
        <div class="row">
          @include('layouts.left-menu')
          @include('layouts.slide')
        </div>
      </div>
    <!-- end category product -->
    <div class="row">
      <div class="col-xs-12 col-md-3"> 
        <!-- online-support -->
        @include('layouts.online-support')
        <!-- end online-support --> 
        <!-- hot news -->
        @include('layouts.hot-news')
        <!-- end hot news -->
      </div>
      <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        @yield('content')
        <!-- end main --> 
      </div>
    </div>
    <!-- adv -->
    <div class="widebanner"> <a href="#"><img src="{{ asset('assets/100/themes/517833/assets/widebanner221b.jpg') }}" alt="#" class="img-responsive"></a> </div>
    <!-- end adv --> 
    <!-- home news -->
    @include('layouts.home-news')
    <!-- end home news --> 
  </div>
</div>
@include('layouts.privacy')
@include('layouts.footer')
<script src='{{ asset('js/owl.carousel.min221b.js') }}' type='text/javascript'></script> 
<script src='{{ asset('js/responsive-menu221b.js') }}' type='text/javascript'></script> 
<script src='{{ asset('js/elevate-zoom221b.js') }}' type='text/javascript'></script> 
<script src='{{ asset('js/main221b.js') }}' type='text/javascript'></script> 
<script src='{{ asset('js/ajax-cart221b.js') }}' type='text/javascript'></script>
@include('layouts.modals')
</body>
</html>