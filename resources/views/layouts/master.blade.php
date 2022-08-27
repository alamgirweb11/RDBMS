<!DOCTYPE html>
     @include('partials.head')
    <body>
       <div class="container">
        @include('partials.navbar')
        @yield('content')
       </div>

        @include('partials.footer_script')
    </body>
</html>