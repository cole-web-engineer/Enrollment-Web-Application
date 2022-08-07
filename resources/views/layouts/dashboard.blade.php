<html>
    @include('adminpartials.head')

    <body>
    <!-- Loader -->
    <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

    <header id="topnav">

        @include('dashboard.topnav')

        @include('dashboard.nav')

    </header>

        @yield('content')

        @include('adminpartials.footer')
        @include('adminpartials.scripts')

    </body>

</html>