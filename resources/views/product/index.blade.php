@extends('layout.app')

@section('title', 'Flota | ECOVOLT')

@section('content')


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
                tarifa y función dentro del ecosistema.

            </p>

        </div>


        <div class="product-grid">

            @forelse($products as $producto)

                @php

                    $textoProducto = strtolower(
                        $producto->name . ' ' .
                        ($producto->category?->name ?? '')
                    );


                    if (
                        str_contains($textoProducto, 'city')
                        ||
                        str_contains($textoProducto, 'flow')
                        ||
                        str_contains($textoProducto, 'bike')
                        ||
                        str_contains($textoProducto, 'bici')
                    ) {

                        $imagen = asset(
                            'images/flota-bike.png'
                        );

                    } elseif (
                        str_contains($textoProducto, 'connect')
                        ||
                        str_contains($textoProducto, 'move')
                    ) {

                        $imagen = asset(
                            'images/flota-connect.png'
                        );

                    } else {

                        $imagen = asset(
                            'images/flota-scooter.png'
                        );

                    }


                    $categoria =
                        $producto->category?->name
                        ?? 'Movilidad eléctrica';

                @endphp


                <article class="product-card">


                    <div class="product-image">

                        <img
                            src="{{ $imagen }}"
                            alt="{{ $producto->name }}"
                        >

                        <div class="product-tag">
                            Disponible
                        </div>

                    </div>


                    <div class="product-content">

                        <div>

                            <div class="product-category">
                                {{ $categoria }}
                            </div>

                            <h2 class="product-name">
                                {{ $producto->name }}
                            </h2>

                            <p class="product-description">
                                {{ $producto->description }}
                            </p>

                        </div>


                        <div class="product-bottom">

                            <div>

                                <span class="price-label">
                                    Tarifa
                                </span>

                                <div class="price">

                                    ${{ number_format((float) $producto->price, 0, ',', '.') }}

                                    <small>
                                        COP
                                    </small>

                                </div>

                            </div>


                            <a
    href="{{ route('products.show', $producto) }}"
    class="btn btn-dark"
>
    Ver vehículo →
</a>

                        </div>

                    </div>

                </article>


            @empty

                <div class="empty-state">

                    <div class="eyebrow">
                        Flota ECOVOLT
                    </div>

                    <h2>
                        No hay vehículos disponibles por el momento.
                    </h2>

                    <p>
                        Próximamente encontrarás nuevas alternativas
                        de movilidad eléctrica.
                    </p>

                </div>

            @endforelse

        </div>


        @if ($products->hasPages())

            <div class="catalogue-pagination">

                {{ $products->links() }}

            </div>

        @endif

    </div>

</main>


<!-- =====================================================
     CTA
===================================================== -->

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
            class="btn btn-primary"
        >

            Conocer ECOVOLT →

        </a>

    </div>

</section>


@endsection