@extends('layout.app')

@php

    /*
    |--------------------------------------------------------------------------
    | DATOS DEL PRODUCTO
    |--------------------------------------------------------------------------
    */

    $id = $product->id;

    $name = $product->name;

    $precio = $product->price;

    $categoria =
        $product->category?->name
        ?? 'Movilidad eléctrica';

    $descripcion =
        $product->description
        ?? 'Alternativa de movilidad eléctrica ECOVOLT.';


    $textoProducto = strtolower(
        $name . ' ' . $categoria
    );


    /*
    |--------------------------------------------------------------------------
    | IMAGEN Y CARACTERÍSTICAS SEGÚN EL TIPO
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

        $tipoUso =
            'Última milla';

        $beneficio =
            'Sistema conectado';

    } elseif (
        str_contains($textoProducto, 'bike')
        ||
        str_contains($textoProducto, 'bici')
    ) {

        $imagen = asset(
            'images/detail-bike.png'
        );

        $tipoUso =
            'Trayectos amplios';

        $beneficio =
            'Mayor comodidad';

    } else {

        $imagen = asset(
            'images/detail-scooter.png'
        );

        $tipoUso =
            'Trayectos cortos';

        $beneficio =
            'Mayor agilidad';

    }

@endphp


@section('title', $name . ' | ECOVOLT')


@section('content')


<!-- =====================================================
     DETALLE DEL VEHÍCULO
===================================================== -->

<main class="detail-page">

    <div class="container">


        <a
            href="{{ route('products.index') }}"
            class="detail-back">

            ← Volver a la flota

        </a>


        <div class="detail-grid">


            <!-- IMAGEN -->

            <div class="detail-image">

                <img
                    src="{{ $imagen }}"
                    alt="{{ $name }}"
                >


                <div class="detail-floating">

                    <strong>
                        ● Disponible
                    </strong>

                    <span>
                        ECOVOLT · Bucaramanga
                    </span>

                </div>

            </div>


            <!-- INFORMACIÓN -->

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
                    donde la facilidad de acceso, la disponibilidad
                    y la claridad de la experiencia son factores importantes.

                </p>


                <!-- PRECIO -->

                <div class="detail-price-wrap">


                    <div>

                        <span class="price-label">
                            Tarifa
                        </span>


                        <div class="detail-price">

                            ${{ number_format((float) $precio, 0, ',', '.') }}

                            <small>
                                COP
                            </small>

                        </div>

                    </div>


                    <div class="detail-id">

                        ECOVOLT #{{ $id }}

                    </div>

                </div>


                <!-- FEATURES -->

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


                <!-- ACCIONES -->

                <div class="detail-actions">


                    <a
                        href="#acceso"
                        class="btn btn-primary">

                        Ver acceso digital

                    </a>


                    <a
                        href="{{ route('products.index') }}"
                        class="btn btn-outline-dark">

                        Explorar otras opciones

                    </a>

                </div>

            </div>

        </div>

    </div>

</main>


<!-- =====================================================
     ACCESO DIGITAL
===================================================== -->

<section
    class="digital-section"
    id="acceso">

    <div class="container">


        <div class="digital-panel">


            <!-- IMAGEN QR -->

            <div class="digital-image">

                <img
                    src="{{ asset('images/ecovolt-qr.png') }}"
                    alt="Activación digital ECOVOLT"
                >

            </div>


            <!-- TEXTO -->

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


@endsection