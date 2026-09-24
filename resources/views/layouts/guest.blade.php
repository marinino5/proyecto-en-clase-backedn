<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <meta
        name="description"
        content="Acceso administrativo ECOVOLT."
    >

    <title>
        ECOVOLT | Acceso administrativo
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link
        rel="stylesheet"
        href="{{ asset('styles.css') }}"
    >

</head>


<body class="auth-body">

    <div class="auth-page">


        <!-- =========================================
             CABECERA
        ========================================== -->

        <header class="auth-header">

            <div class="auth-header-inner">

                <a
                    href="{{ url('/') }}"
                    class="auth-brand"
                >
                    <x-application-logo />
                </a>


                <a
                    href="{{ route('products.index') }}"
                    class="auth-public-link"
                >
                    Ver sitio público ↗
                </a>

            </div>

        </header>



        <!-- =========================================
             CONTENIDO
        ========================================== -->

        <main class="auth-main">

            <div class="auth-shell">


                <!-- =================================
                     PANEL DE MARCA
                ================================== -->

                <section class="auth-visual">

                    <div class="auth-visual-glow"></div>


                    <div class="auth-visual-content">


                        <div>

                            <div class="auth-kicker">
                                Acceso interno
                            </div>


                            <h1 class="auth-hero-title">

                                GESTIONA

                                <br>

                                TU FLOTA

                                <br>

                                <span>
                                    ECOVOLT.
                                </span>

                            </h1>

                        </div>


                        <div class="auth-visual-bottom">

                            <p>

                                Accede al panel administrativo para crear,
                                editar y gestionar los vehículos disponibles
                                dentro del ecosistema ECOVOLT.

                            </p>


                            <div class="auth-status">

                                <span class="auth-status-dot"></span>

                                Gestión segura de flota

                            </div>

                        </div>

                    </div>

                </section>



                <!-- =================================
                     FORMULARIO
                ================================== -->

                <section class="auth-form-panel">

                    <div class="auth-form-inner">

                        {{ $slot }}

                    </div>

                </section>

            </div>

        </main>



        <!-- =========================================
             FOOTER
        ========================================== -->

        <footer class="auth-footer">

            © {{ date('Y') }} ECOVOLT · Bucaramanga, Colombia

        </footer>

    </div>

</body>

</html>