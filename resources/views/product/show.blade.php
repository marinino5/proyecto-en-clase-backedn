<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Detalle | ECOVOLT
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('styles.css') }}">

</head>


<body>


@php

    /*
    |--------------------------------------------------------------------------
    | PRODUCTO
    |--------------------------------------------------------------------------
    */

    $item =
        $product
        ??
        $producto
        ??
        null;


    if (!$item) {

        $item = [

            'idProduct' =>
                request()
                    ->route(
                        'idProduct'
                    )
                ??
                1,

            'name' =>
                'Urban Glide',

            'precio' =>
                8500,

            'categoria' =>
                'Patineta eléctrica',

            'descrip' =>
                'Alternativa de micromovilidad eléctrica pensada para recorridos urbanos ágiles.'

        ];

    }


    $id =
        data_get(
            $item,
            'idProduct',
            data_get(
                $item,
                'id',
                1
            )
        );


    $name =
        data_get(
            $item,
            'name',
            'Vehículo ECOVOLT'
        );


    $precio =
        data_get(
            $item,
            'precio',
            0
        );


    $categoria =
        data_get(
            $item,
            'categoria',
            'Movilidad eléctrica'
        );


    $descripcion =
        data_get(
            $item,
            'descrip',
            'Alternativa de movilidad eléctrica ECOVOLT.'
        );


    $textoProducto =
        strtolower(
            $name
            .
            ' '
            .
            $categoria
        );


    if (
        str_contains(
            $textoProducto,
            'bike'
        )
        ||
        str_contains(
            $textoProducto,
            'bici'
        )
    ) {

        $imagen =
            asset(
                'images/detail-bike.png'
            );


        $tipoUso =
            'Trayectos amplios';


        $beneficio =
            'Mayor comodidad';

    } elseif (
        str_contains(
            $textoProducto,
            'connect'
        )
        ||
        str_contains(
            $textoProducto,
            'conect'
        )
    ) {

        $imagen =
            asset(
                'images/flota-connect.png'
            );


        $tipoUso =
            'Última milla';


        $beneficio =
            'Sistema conectado';

    } else {

        $imagen =
            asset(
                'images/detail-scooter.png'
            );


        $tipoUso =
            'Trayectos cortos';


        $beneficio =
            'Mayor agilidad';

    }

@endphp



<!-- =====================================================
     NAVBAR
===================================================== -->

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
                href="{{ url('/product') }}"
                class="nav-link nav-pill">

                Flota

            </a>

        </div>

    </div>

</nav>



<!-- =====================================================
     DETAIL
===================================================== -->

<main class="detail-page">


    <div class="container">


        <a
            href="{{ url('/product') }}"
            class="detail-back">

            ← Volver a la flota

        </a>



        <div class="detail-grid">


            <div class="detail-image">


                <img
                    src="{{ $imagen }}"
                    alt="{{ $name }}">


                <div class="detail-floating">


                    <strong>
                        ● Disponible
                    </strong>


                    <span>
                        ECOVOLT · Bucaramanga
                    </span>

                </div>

            </div>



            <div>


                <div class="detail-category">

                    {{ $categoria }}

                </div>


                <h1 class="detail-title">

                    {{ $name }}

                </h1>


                <p class="detail-description">

                    {{ $descripcion }}

                    Esta alternativa hace parte del ecosistema ECOVOLT
                    y está pensada para integrarse a recorridos urbanos
                    donde la facilidad de acceso, la disponibilidad y
                    la claridad de la experiencia son factores relevantes.

                </p>



                <div class="detail-price-wrap">


                    <div>


                        <span class="price-label">
                            Tarifa
                        </span>


                        <div class="detail-price">

                            ${{ number_format((float)$precio, 0, ',', '.') }}

                            <small>
                                COP
                            </small>

                        </div>

                    </div>



                    <div class="detail-id">

                        ECOVOLT #{{ $id }}

                    </div>

                </div>



                <div class="detail-features">


                    <div class="feature-chip">

                        <strong>
                            Eléctrico
                        </strong>

                        <span>
                            Movilidad urbana
                        </span>

                    </div>


                    <div class="feature-chip">

                        <strong>
                            {{ $tipoUso }}
                        </strong>

                        <span>
                            Uso recomendado
                        </span>

                    </div>


                    <div class="feature-chip">

                        <strong>
                            {{ $beneficio }}
                        </strong>

                        <span>
                            Experiencia ECOVOLT
                        </span>

                    </div>

                </div>



                <div class="detail-actions">


                    <a
                        href="#acceso"
                        class="btn btn-primary">

                        Ver acceso digital

                    </a>


                    <a
                        href="{{ url('/product') }}"
                        class="btn btn-outline-dark">

                        Explorar otras opciones

                    </a>

                </div>

            </div>

        </div>

    </div>

</main>



<!-- =====================================================
     DIGITAL
===================================================== -->

<section
    class="digital-section"
    id="acceso">


    <div class="container">


        <div class="digital-panel">


            <div class="digital-image">


                <img
                    src="{{ asset('images/ecovolt-qr.png') }}"
                    alt="Activación digital ECOVOLT">

            </div>



            <div class="digital-copy">


                <div class="hero-kicker">

                    Acceso digital

                </div>


                <h2>

                    Identifica.

                    <br>

                    Activa.

                    <br>

                    <span>
                        Muévete.
                    </span>

                </h2>


                <p>

                    El vehículo se integra a una experiencia digital
                    que permite identificarlo y organizar el inicio
                    del recorrido mediante una interacción sencilla
                    con el sistema.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="site-footer">


    <div class="container">


        <div class="footer-top">


            <div>


                <div class="footer-brand">

                    ECO<span>VOLT</span>

                </div>


                <p class="footer-description">

                    Plataforma de micromovilidad eléctrica
                    diseñada para conectar vehículos,
                    tecnología e infraestructura dentro
                    del recorrido urbano.

                </p>

            </div>



            <div>


                <div class="footer-label">

                    Explorar

                </div>


                <div class="footer-links">

                    <a href="{{ url('/') }}">
                        Inicio
                    </a>

                    <a href="{{ url('/product') }}">
                        Flota
                    </a>

                    <a href="{{ url('/#como-funciona') }}">
                        Cómo funciona
                    </a>

                </div>

            </div>



            <div>


                <div class="footer-label">

                    ECOVOLT

                </div>


                <div class="footer-links">

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
                © {{ date('Y') }} ECOVOLT · Bucaramanga
            </span>

            <span>
                Electric Urban Mobility
            </span>

        </div>

    </div>

</footer>


</body>
</html>