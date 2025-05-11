<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Reservation | Dashboard </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    
    
        <link href="{{URL::asset('assets/css/theme-rtl.css')}}" rel="stylesheet"  id="style-rtl">
    <link href="{{URL::asset('assets/css/theme.css')}}" rel="stylesheet"  id="style-default">
    <link href="{{URL::asset('assets/css/user-rtl.css')}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{URL::asset('assets/css/user.css')}}" rel="stylesheet" id="user-style-default">

    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

    <body>
        <main class="main" id="top">
          <div class="container-fluid" data-layout="container">
            <script type="module">
              var isFluid = JSON.parse(localStorage.getItem('isFluid'));
              if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
              }
            </script>
            <div class="content">


              @yield('content')
              
        
            </div>

          </div>
        </main>


        <script src="{{URL::asset('assets/js/config.js')}}"></script>
        <script src="{{URL::asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/is/is.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/anchorjs/anchor.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/fontawesome/all.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/lodash/lodash.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/theme.js')}}"></script>

    </body>
</html>