<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <title>Penggalangan Dana Panti Asuhan | @yield('title')</title>

        @include('layout.meta.index')

        @include('layout.icon.index')

        @include('layout.css.index')

        @yield('css')

    </head>
    <body>
        <div class="container-scroller">
            <!-- partial -->
            @include('layout.navigation.index')
                @yield('content')
        </div>
        @include('layout.js.index')
        {{-- @include('sweetalert::alert') --}}
        @yield('js')
    </body>
</html>