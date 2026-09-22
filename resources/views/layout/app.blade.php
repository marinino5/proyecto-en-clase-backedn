<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="ECOVOLT - Micromovilidad eléctrica urbana en Bucaramanga.">

    <title>@yield('title', 'ECOVOLT')</title>

    <link
        rel="stylesheet"
        href="{{ asset('styles.css') }}">

</head>

<body>

@hasSection('fullPage')

    @yield('fullPage')

@else

    @hasSection('customNavbar')

        @yield('customNavbar')

    @else

        <nav class="main-nav scrolled">

            <div class="nav-inner">

                <a
                    href="{{ url('/') }}"
                    class="brand">

                    <div class="brand-name">
                        ECO<span>VOLT</span>
                    </div>

                </a>

                <div class="nav-links">

                    <a
                        href="{{ url('/') }}"
                        class="nav-link">

                        Inicio

                    </a>

                    <a
                        href="{{ url('/#como-funciona') }}"
                        class="nav-link">

                        Cómo funciona

                    </a>

                    <a
                        href="{{ url('/product') }}"
                        class="nav-link nav-pill">

                        Flota

                    </a>

                </div>

            </div>

        </nav>

    @endif


    @yield('content')


    @hasSection('customFooter')

        @yield('customFooter')

    @else

        <footer class="site-footer">

            <div class="container">

                <div class="footer-top">

                    <div>

                        <div class="footer-brand">
                            ECO<span>VOLT</span>
                        </div>

                        <p class="footer-description">

                            Micromovilidad eléctrica pensada para
                            conectar ciudad, vehículos, infraestructura
                            y tecnología dentro de una misma experiencia.

                        </p>

                    </div>

                    <div>

                        <div class="footer-label">
                            Navegación
                        </div>

                        <div class="footer-links">

                            <a href="{{ url('/') }}">
                                Inicio
                            </a>

                            <a href="{{ url('/#como-funciona') }}">
                                Cómo funciona
                            </a>

                            <a href="{{ url('/product') }}">
                                Flota
                            </a>

                        </div>

                    </div>

                    <div>

                        <div class="footer-label">
                            ECOVOLT
                        </div>

                        <div class="footer-links">

                            <a href="{{ url('/#concepto') }}">
                                Concepto
                            </a>

                            <a href="{{ url('/#experiencia') }}">
                                Experiencia
                            </a>

                            <a href="{{ url('/#impacto') }}">
                                Tecnología
                            </a>

                        </div>

                    </div>

                </div>

                <div class="footer-bottom">

                    <span>
                        © {{ date('Y') }} ECOVOLT · Bucaramanga, Colombia
                    </span>

                    <span>
                        Electric Urban Mobility
                    </span>

                </div>

            </div>

        </footer>

    @endif


    @stack('scripts')

@endif

</body>
</html>
