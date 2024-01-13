<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
@include('layouts.frontend.head_scripts')                              
<body class="header_sticky"> 
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>   

    <!-- Boxed -->
    <div class="boxed">



    <div class="flat-header-wrap">
        <!-- Header -->            
       @include('layouts.frontend.header')
    </div>

  @yield('content')

    <!-- Footer -->
  @include('layouts.frontend.footer')

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>       

    </div>
    
@include('layouts.frontend.foot_scripts')
@stack('scripts')
</body>
</html>