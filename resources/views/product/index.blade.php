<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Flota | ECOVOLT</title>

    <link
        rel="stylesheet"
        href="{{ asset('styles.css') }}">
</head>

<body>

@php

    /*
    |--------------------------------------------------------------------------
    | CATÁLOGO
    |--------------------------------------------------------------------------
    | Si el controlador envía $products o $productos, se utilizan esos datos.
    | Si no hay productos, se muestran los tres vehículos de ejemplo ECOVOLT.
    */

    $catalogo = collect($products ?? $productos ?? []);

    if ($catalogo->isEmpty()) {

        $catalogo = collect([
            [
                'idProduct' => 1,
                'name' => 'Urban Glide',
                'precio' => 8500,
                'categoria' => 'Patineta eléctrica',
                'descrip' => 'Una alternativa ágil para recorridos urbanos cortos, diseñada para desplazamientos rápidos y flexibles.'
            ],
            [
                'idProduct' => 2,
                'name' => 'City Motion',
                'precio' => 12000,
                'categoria' => 'Bicicleta eléctrica',
                'descrip' => 'Una experiencia cómoda y estable para trayectos urbanos de mayor distancia.'
            ],
            [
                'idProduct' => 3,
                'name' => 'Volt Connect',
                'precio' => 9800,
                'categoria' => 'Movilidad conectada',
                'descrip' => 'Una solución integrada al ecosistema de estaciones ECOVOLT para recorridos urbanos de última milla.'
            ]
        ]);

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


<!-- =====================================================
     HERO
===================================================== -->

<header class="page-hero">

    <div class="container page-hero-grid">

        <div>

            <div class="hero-kicker">
                Vehículos ECOVOLT
            </div>

            <h1 class="page-title">

                ELIGE

                <br>

                CÓMO

                <br>

                <span>
                    MOVERTE.
                </span>

            </h1>

        </div>


        <p class="page-hero-copy">

            La flota reúne alternativas eléctricas pensadas
            para necesidades diferentes: agilidad en recorridos
            cortos, mayor comodidad o integración con la
            infraestructura del sistema.

        </p>

    </div>

</header>


<!-- =====================================================
     CATÁLOGO
===================================================== -->

<main class="catalogue">

    <div class="container">

        <div class="catalogue-top">

            <div>

                <div class="eyebrow">
                    Flota ECOVOLT
                </div>

                <h2 class="catalogue-title">
                    Una opción para cada tipo de recorrido.
                </h2>

            </div>


            <p class="section-copy">

                Consulta las alternativas disponibles y entra
                al detalle de cada vehículo para conocer su
                categoría, tarifa y función dentro del ecosistema.

            </p>

        </div>


        <div class="product-grid">

            @foreach($catalogo as $item)

                @php

                    $id = data_get(
                        $item,
                        'idProduct',
                        data_get($item, 'id', 1)
                    );

                    $name = data_get(
                        $item,
                        'name',
                        'Vehículo ECOVOLT'
                    );

                    $precio = data_get(
                        $item,
                        'precio',
                        0
                    );

                    $categoria = data_get(
                        $item,
                        'categoria',
                        'Movilidad eléctrica'
                    );

                    $descripcion = data_get(
                        $item,
                        'descrip',
                        'Alternativa de movilidad eléctrica ECOVOLT.'
                    );

                    $textoProducto = strtolower(
                        $name . ' ' . $categoria
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | IMAGEN SEGÚN TIPO DE VEHÍCULO
                    |--------------------------------------------------------------------------
                    */

                    if (
                        str_contains($textoProducto, 'connect')
                        ||
                        str_contains($textoProducto, 'conect')
                    ) {

                        $imagen = asset(
                            'images/flota-connect.png'
                        );

                    } elseif (
                        str_contains($textoProducto, 'bike')
                        ||
                        str_contains($textoProducto, 'bici')
                    ) {

                        $imagen = asset(
                            'images/flota-bike.png'
                        );

                    } else {

                        $imagen = asset(
                            'images/flota-scooter.png'
                        );

                    }

                @endphp


                <article class="product-card">

                    <!-- IMAGEN -->

                    <div class="product-image">

                        <img
                            src="{{ $imagen }}"
                            alt="{{ $name }}">

                        <div class="product-tag">
                            Disponible
                        </div>

                    </div>


                    <!-- INFORMACIÓN -->

                    <div class="product-content">

                        <div>

                            <div class="product-category">
                                {{ $categoria }}
                            </div>

                            <h2 class="product-name">
                                {{ $name }}
                            </h2>

                            <p class="product-description">
                                {{ $descripcion }}
                            </p>

                        </div>


                        <div class="product-bottom">

                            <div>

                                <span class="price-label">
                                    Tarifa
                                </span>

                                <div class="price">

                                    ${{ number_format((float) $precio, 0, ',', '.') }}

                                    <small>
                                        COP
                                    </small>

                                </div>

                            </div>


                            <a
                                href="{{ url('/product/' . $id) }}"
                                class="btn btn-dark">

                                Ver vehículo →

                            </a>

                        </div>

                    </div>

                </article>
@endforeach
        </div>

    </div>

</main>


<section class="cta-wrap">

    <h2 class="cta-title">

        MENOS PASOS.

        <br>

        MÁS

        <span>
            MOVIMIENTO.
        </span>

    </h2>


    <div class="cta-bottom">

        <p>

            ECOVOLT conecta vehículos, infraestructura
            y acceso digital dentro de una experiencia
            de movilidad urbana más clara.

        </p>


        <a
            href="{{ url('/') }}"
            class="btn btn-primary">

            Conocer ECOVOLT →

        </a>

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

                    Micromovilidad eléctrica pensada para
                    conectar ciudad, vehículos y tecnología
                    dentro de una misma experiencia.

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

                    <a href="{{ url('/#experiencia') }}">
                        Experiencia
                    </a>

                    <a href="{{ url('/#impacto') }}">
                        Tecnología
                    </a>

                    <a href="{{ url('/product/create') }}">
                        Gestión
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