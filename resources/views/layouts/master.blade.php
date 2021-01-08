<!doctype html>
<html>
<head>
  <title>{{ $siteTitle }}</title>
  <meta content="{{ $siteKeywords }}" name="keywords">
  <meta content="{{ $siteDescription }}" name="description">
   @include('includes.head')
</head>
<body>
<div id="wrapper">
   <header>
       @include('includes.header')
   </header>
   <div id="main" class="row">
           <!-- @include('includes.flash-message') -->
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>