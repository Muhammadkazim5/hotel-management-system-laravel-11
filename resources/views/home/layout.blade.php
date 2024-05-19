
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- basic -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!-- mobile metas -->
 <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Hotel Booking</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
<!-- style css -->
<link rel="stylesheet" href=" {{asset('assets/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('assets/images/loading.gif')}}" alt="#"/></div>
      </div>
      <!-- end loader -->
      {{-- <!-- header -->
        @include('home.header')
      <!-- end header -->
    
         @yield('content')
     
      <!--  footer -->
         @include('home.footer')
      <!-- end footer --> --}}
      <!-- Javascript files-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      <script src="{{asset('assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src=" {{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src=" {{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('assets/js/custom.js')}}"></script>
   </body>
</html>