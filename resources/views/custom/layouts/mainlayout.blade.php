<!DOCTYPE html>
 <html > 
    @include('custom.layouts.frontend.head')
<body>
    @include('custom.layouts.frontend.warp')

     @yield('custom.content')

@include('custom.layouts.frontend.footer')
@include('custom.layouts.frontend.footer-scripts')
 </body>
</html>