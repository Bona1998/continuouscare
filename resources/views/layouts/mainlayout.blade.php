<!DOCTYPE html>
 <html > 
    @include('layouts.frontend.head')
<body>
    @include('layouts.frontend.warp')

     @yield('content')

@include('layouts.frontend.footer')
@include('layouts.frontend.footer-scripts')
 </body>
</html>