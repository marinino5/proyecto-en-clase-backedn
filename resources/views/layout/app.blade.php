<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="ECOVOLT - Micromovilidad eléctrica urbana en Bucaramanga."
    >

    <title>
        @yield('title', 'ECOVOLT | Micromovilidad eléctrica')
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('styles.css') }}"
    >

</head>

<body>

    @hasSection('fullPage')

        @yield('fullPage')

    @else

        @php

            $adminArea =
                request()->routeIs('products.manage')
                ||
                request()->routeIs('products.create')
                ||
                request()->routeIs('products.edit');

        @endphp


        @if ($adminArea)

            @include('product.partials.admin-nav')

        @else

            @include('layout.header')

        @endif


        <main>

            <div class="container">

                @yield('content')

            </div>

        </main>


        @unless ($adminArea)

            @include('layout.footer')

        @endunless

    @endif


    @stack('scripts')

</body>

</html>