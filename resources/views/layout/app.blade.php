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

        @include('layout.header')

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>

        @include('layout.footer')

    @endif

    @stack('scripts')

</body>

</html>