<!doctype html>
<html>
<head>
   @include('web.layout.head')
</head>
<body>
<div class="container-fluid">
   <header class="row">
       @include('web.layout.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('web.layout.footer')
   </footer>
</div>
</body>
</html>