@extends('layout.app')

@section('title', 'ECOVOLT | Micromovilidad eléctrica')

@section('fullPage')

<!-- =====================================================
     NAVBAR
===================================================== -->

<nav
    class="main-nav"
    id="mainNav">

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
                class="nav-link"
                href="#concepto">

                Concepto

            </a>


            <a
                class="nav-link"
                href="#como-funciona">

                Cómo funciona

            </a>


            <a
                class="nav-link"
                href="#experiencia">

                Experiencia

            </a>


            <a
                class="nav-link"
                href="#impacto">

                Tecnología

            </a>


            <a
                class="nav-link nav-pill"
                href="{{ url('/product') }}">

                Explorar flota →

            </a>

        </div>

    </div>

</nav>



<!-- =====================================================
     HERO
===================================================== -->

<header
    class="hero"
    id="inicio">


    <div class="hero-media">

        <img
            id="heroImage"
            src="{{ asset('images/ecovolt-ciudad.jpg') }}"
            alt="Vista urbana de Bucaramanga">

    </div>


    <div class="hero-glow"></div>


    <div class="hero-content">


        <div>


            <div class="hero-kicker">

                Micromovilidad eléctrica · Bucaramanga

            </div>


            <h1 class="hero-title">

                MUEVE

                <br>

                <span class="outline">
                    TU
                </span>

                <br>

                <span class="hero-subline">
                    CIUDAD.
                </span>

            </h1>


            <div class="hero-bottom">


                <a
                    href="{{ url('/product') }}"
                    class="btn btn-primary">

                    Explorar vehículos

                    <span>
                        ↗
                    </span>

                </a>


                <p>

                    Una experiencia de movilidad urbana pensada
                    para conectar recorridos cotidianos con
                    vehículos eléctricos, infraestructura organizada
                    y acceso digital en un mismo ecosistema.

                </p>

            </div>

        </div>



        <div class="hero-side">


            <div class="glass-card">

                <div class="glass-number">
                    100%
                </div>

                <div class="glass-label">
                    movilidad eléctrica orientada
                    a recorridos urbanos
                </div>

            </div>


            <div class="glass-card">

                <div class="glass-number">
                    2
                </div>

                <div class="glass-label">
                    alternativas principales:
                    patinetas y bicicletas eléctricas
                </div>

            </div>

        </div>

    </div>


    <div class="hero-scroll">

        Scroll para explorar

    </div>

</header>



<!-- =====================================================
     CONCEPTO
===================================================== -->

<section
    class="section"
    id="concepto">

    <div class="container">


        <div class="intro-grid">


            <div class="intro-sticky">


                <div class="eyebrow">
                    La idea
                </div>


                <h2 class="intro-lead">

                    No se trata solo
                    de alquilar un vehículo.

                    Se trata de

                    <span class="text-green">
                        simplificar cómo te mueves.
                    </span>

                </h2>

            </div>



            <div class="intro-right">


                <p class="intro-copy">

                    ECOVOLT propone un sistema de micromovilidad
                    eléctrica pensado para recorridos urbanos de corta
                    y media distancia. La experiencia integra vehículos,
                    estaciones, consulta de disponibilidad y acceso
                    digital para reducir pasos innecesarios entre la
                    elección del trayecto y el inicio del recorrido.

                </p>



                <div class="bento">


                    <article class="bento-card bento-main">


                        <div class="bento-image">

                            <img
                                src="{{ asset('images/ecovolt-concepto.png') }}"
                                alt="Experiencia de movilidad urbana ECOVOLT">

                        </div>


                        <div class="bento-content">

                            <div class="bento-label">

                                Movilidad urbana

                            </div>


                            <h3 class="bento-title">

                                Menos fricción entre
                                elegir el recorrido y
                                comenzar a moverte.

                            </h3>

                        </div>

                    </article>



                    <article class="bento-card bento-small green">


                        <div class="bento-icon">
                            QR
                        </div>


                        <div>

                            <div class="bento-big-number">
                                FAST
                            </div>

                            <p>

                                El acceso digital concentra
                                activación y consulta dentro
                                de una experiencia simple.

                            </p>

                        </div>

                    </article>



                    <article class="bento-card bento-small dark">


                        <div class="bento-icon">
                            ⚡
                        </div>


                        <div>

                            <div class="bento-big-number">
                                LIVE
                            </div>

                            <p>

                                Disponibilidad y recorrido
                                se conectan para que el usuario
                                encuentre una alternativa útil
                                sin información dispersa.

                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     CÓMO FUNCIONA
===================================================== -->

<section
    class="section how-section"
    id="como-funciona">

    <div class="container">


        <div class="how-header">


            <div>

                <div
                    class="eyebrow"
                    style="color:#78ea5d;">

                    Una experiencia simple

                </div>


                <h2 class="section-title">

                    De encontrar

                    <br>

                    a moverte.

                </h2>

            </div>



            <p class="section-copy">

                El recorrido se organiza en una secuencia sencilla:
                localizar opciones, elegir el vehículo adecuado,
                activar el acceso y completar el trayecto.

            </p>

        </div>



        <div
            class="timeline-journey"
            id="journeyTimeline">

            <div class="timeline-progress"></div>


            <div class="timeline-grid">


                <article class="timeline-step">

                    <span class="timeline-dot"></span>


                    <div class="timeline-card">

                        <div class="timeline-label">

                            01 — Ubica

                        </div>


                        <h3>
                            Encuentra
                        </h3>


                        <p>

                            Consulta las estaciones cercanas
                            y revisa qué vehículos se encuentran
                            disponibles en el punto donde deseas
                            comenzar.

                        </p>


                        <div class="timeline-mini">

                            Estaciones · disponibilidad · cercanía

                        </div>

                    </div>

                </article>



                <article class="timeline-step">

                    <span class="timeline-dot"></span>


                    <div class="timeline-card">

                        <div class="timeline-label">

                            02 — Elige

                        </div>


                        <h3>
                            Selecciona
                        </h3>


                        <p>

                            Escoge entre patineta o bicicleta
                            eléctrica de acuerdo con el tipo de
                            trayecto, distancia y forma en la que
                            prefieres desplazarte.

                        </p>


                        <div class="timeline-mini">

                            Patineta · bicicleta · trayecto

                        </div>

                    </div>

                </article>



                <article class="timeline-step">

                    <span class="timeline-dot"></span>


                    <div class="timeline-card">

                        <div class="timeline-label">

                            03 — Activa

                        </div>


                        <h3>
                            Desbloquea
                        </h3>


                        <p>

                            Utiliza el acceso digital para
                            identificar y activar el vehículo
                            sin procesos adicionales antes de
                            comenzar el recorrido.

                        </p>


                        <div class="timeline-mini">

                            QR · acceso digital · activación

                        </div>

                    </div>

                </article>



                <article class="timeline-step">

                    <span class="timeline-dot"></span>


                    <div class="timeline-card">

                        <div class="timeline-label">

                            04 — Muévete

                        </div>


                        <h3>
                            Recorre
                        </h3>


                        <p>

                            Realiza el trayecto y finaliza
                            la experiencia en un punto habilitado,
                            manteniendo organizada la información
                            asociada al recorrido.

                        </p>


                        <div class="timeline-mini">

                            Trayecto · cierre · experiencia

                        </div>

                    </div>

                </article>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     EXPERIENCIA
===================================================== -->

<section
    class="experience-section"
    id="experiencia">


    <div class="experience-header container">


        <div>


            <div class="eyebrow">

                ECOVOLT en movimiento

            </div>


            <h2 class="section-title">

                Una experiencia construida
                en distintos

                <span class="text-green">
                    momentos.
                </span>

            </h2>

        </div>



        <p class="section-copy">

            Infraestructura, vehículos y recorridos forman
            parte de una misma propuesta. Cada escena muestra
            una parte diferente del ecosistema ECOVOLT.

        </p>

    </div>



    <div
        class="carousel-shell"
        id="ecoCarousel">


        <div
            class="carousel-track"
            id="carouselTrack">



            <!-- ESTACIÓN -->

            <article class="carousel-slide active">


                <img
                    src="{{ asset('images/ecovolt-slide-estacion.png') }}"
                    alt="Estación ECOVOLT">


                <div class="slide-content">


                    <div class="slide-count">

                        01 · Infraestructura

                    </div>


                    <h3>

                        Una red que comienza
                        en puntos estratégicos.

                    </h3>


                    <p>

                        Las estaciones organizan disponibilidad,
                        acceso y ubicación de vehículos dentro
                        de un entorno urbano diseñado para una
                        experiencia más clara.

                    </p>

                </div>

            </article>



            <!-- SCOOTER -->

            <article class="carousel-slide">


                <img
                    src="{{ asset('images/ecovolt-slide-scooter.png') }}"
                    alt="Usuario ECOVOLT en patineta eléctrica">


                <div class="slide-content">


                    <div class="slide-count">

                        02 · Agilidad

                    </div>


                    <h3>

                        Recorridos cortos.
                        Menos complicaciones.

                    </h3>


                    <p>

                        La patineta eléctrica responde a trayectos
                        en los que la agilidad y la flexibilidad
                        hacen parte importante de la experiencia.

                    </p>

                </div>

            </article>



            <!-- BIKE -->

            <article class="carousel-slide">


                <img
                    src="{{ asset('images/ecovolt-slide-bike.png') }}"
                    alt="Usuario ECOVOLT en bicicleta eléctrica">


                <div class="slide-content">


                    <div class="slide-count">

                        03 · Comodidad

                    </div>


                    <h3>

                        Más distancia.
                        El mismo ecosistema.

                    </h3>


                    <p>

                        La bicicleta eléctrica amplía las opciones
                        para recorridos urbanos que requieren una
                        experiencia más estable y cómoda.

                    </p>

                </div>

            </article>

        </div>



        <div class="carousel-progress">


            <button
                class="carousel-dot active"
                data-index="0"
                aria-label="Ver estación">
            </button>


            <button
                class="carousel-dot"
                data-index="1"
                aria-label="Ver patineta">
            </button>


            <button
                class="carousel-dot"
                data-index="2"
                aria-label="Ver bicicleta">
            </button>

        </div>



        <div class="carousel-controls">


            <button
                class="carousel-btn"
                id="carouselPrev"
                aria-label="Anterior">

                ←

            </button>


            <button
                class="carousel-btn"
                id="carouselNext"
                aria-label="Siguiente">

                →

            </button>

        </div>

    </div>

</section>



<!-- =====================================================
     TECNOLOGÍA
===================================================== -->

<section
    class="impact"
    id="impacto">

    <div class="container">


        <div class="impact-grid">


            <div class="impact-visual">


                <img
                    src="{{ asset('images/ecovolt-qr.png') }}"
                    alt="Acceso digital ECOVOLT mediante QR">


                <div class="impact-badge">

                    <strong>
                        DIGITAL ACCESS
                    </strong>

                    <span>
                        Tecnología aplicada al recorrido
                    </span>

                </div>

            </div>



            <div class="impact-content">


                <div class="eyebrow">

                    Tecnología útil

                </div>


                <h2 class="section-title">

                    La tecnología acompaña
                    el recorrido sin convertirse
                    en una barrera.

                </h2>


                <p class="section-copy">

                    ECOVOLT utiliza herramientas digitales para
                    facilitar el acceso al vehículo y organizar
                    la experiencia. La tecnología funciona como
                    soporte del recorrido, no como un proceso
                    adicional que complique al usuario.

                </p>



                <div class="impact-points">


                    <div class="impact-row">

                        <span>
                            01
                        </span>


                        <div>

                            <h4>
                                Acceso directo
                            </h4>

                            <p>

                                El usuario identifica el vehículo
                                y accede a la experiencia desde
                                una interacción digital sencilla.

                            </p>

                        </div>

                    </div>



                    <div class="impact-row">

                        <span>
                            02
                        </span>


                        <div>

                            <h4>
                                Información centralizada
                            </h4>

                            <p>

                                Vehículo, ubicación y recorrido
                                pueden consultarse dentro del
                                mismo entorno de servicio.

                            </p>

                        </div>

                    </div>



                    <div class="impact-row">

                        <span>
                            03
                        </span>


                        <div>

                            <h4>
                                Ecosistema conectado
                            </h4>

                            <p>

                                Estaciones, patinetas y bicicletas
                                forman parte de una misma lógica
                                de movilidad urbana.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     CTA
===================================================== -->

<section class="cta-wrap">


    <h2 class="cta-title">

        TU PRÓXIMO
        RECORRIDO

        <br>

        PUEDE SER

        <span>
            ELÉCTRICO.
        </span>

    </h2>



    <div class="cta-bottom">


        <p>

            Explora la flota ECOVOLT y encuentra
            una alternativa de movilidad pensada
            para diferentes recorridos urbanos.

        </p>


        <a
            href="{{ url('/product') }}"
            class="btn btn-primary">

            Ver flota

            <span>
                ↗
            </span>

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

                    Propuesta de micromovilidad eléctrica
                    orientada a conectar vehículos,
                    infraestructura y experiencia digital
                    dentro del entorno urbano de Bucaramanga.

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

                    <a href="#concepto">
                        Concepto
                    </a>

                    <a href="#como-funciona">
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

                    <a href="#experiencia">
                        Experiencia
                    </a>

                    <a href="#impacto">
                        Tecnología
                    </a>

                    <a href="{{ url('/product') }}">
                        Vehículos
                    </a>

                </div>

            </div>

        </div>



        <div class="footer-bottom">


            <span>

                © {{ date('Y') }}
                ECOVOLT · Bucaramanga, Colombia

            </span>


            <span>
                Electric Urban Mobility
            </span>

        </div>

    </div>

</footer>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

    /*
    |--------------------------------------------------------------------------
    | NAVBAR
    |--------------------------------------------------------------------------
    */

    const nav =
        document.getElementById('mainNav');


    function updateNavbar() {

        if (window.scrollY > 40) {

            nav.classList.add('scrolled');

        } else {

            nav.classList.remove('scrolled');

        }

    }


    window.addEventListener(
        'scroll',
        updateNavbar
    );


    updateNavbar();



    /*
    |--------------------------------------------------------------------------
    | PARALLAX HERO
    |--------------------------------------------------------------------------
    */

    const heroImage =
        document.getElementById('heroImage');


    window.addEventListener(
        'scroll',
        () => {

            const scroll =
                window.scrollY;


            if (
                scroll
                <
                window.innerHeight
            ) {

                heroImage.style.transform =
                    `scale(1.04) translateY(${scroll * 0.07}px)`;

            }

        }
    );



    /*
    |--------------------------------------------------------------------------
    | TIMELINE
    |--------------------------------------------------------------------------
    */

    const timeline =
        document.getElementById(
            'journeyTimeline'
        );


    const timelineObserver =
        new IntersectionObserver(
            entries => {

                entries.forEach(
                    entry => {

                        if (
                            entry.isIntersecting
                        ) {

                            entry.target
                                .classList
                                .add('visible');

                        }

                    }
                );

            },
            {
                threshold: .25
            }
        );


    timelineObserver.observe(
        timeline
    );



    /*
    |--------------------------------------------------------------------------
    | CAROUSEL
    |--------------------------------------------------------------------------
    */

    const carousel =
        document.getElementById(
            'ecoCarousel'
        );


    const track =
        document.getElementById(
            'carouselTrack'
        );


    const slides =
        Array.from(
            document.querySelectorAll(
                '.carousel-slide'
            )
        );


    const dots =
        Array.from(
            document.querySelectorAll(
                '.carousel-dot'
            )
        );


    const previousButton =
        document.getElementById(
            'carouselPrev'
        );


    const nextButton =
        document.getElementById(
            'carouselNext'
        );


    let currentSlide = 0;

    let autoPlay;



    function goToSlide(index) {


        if (index < 0) {

            index =
                slides.length - 1;

        }


        if (
            index
            >=
            slides.length
        ) {

            index = 0;

        }


        currentSlide =
            index;


        track.style.transform =
            `translateX(-${currentSlide * 100}%)`;


        slides.forEach(
            (slide, slideIndex) => {

                slide.classList.toggle(
                    'active',
                    slideIndex
                    ===
                    currentSlide
                );

            }
        );


        dots.forEach(
            (dot, dotIndex) => {

                dot.classList.toggle(
                    'active',
                    dotIndex
                    ===
                    currentSlide
                );

            }
        );

    }



    function nextSlide() {

        goToSlide(
            currentSlide + 1
        );

    }



    function previousSlide() {

        goToSlide(
            currentSlide - 1
        );

    }



    function stopAutoPlay() {

        if (autoPlay) {

            clearInterval(
                autoPlay
            );

        }

    }



    function startAutoPlay() {

        stopAutoPlay();

        autoPlay =
            setInterval(
                nextSlide,
                5500
            );

    }



    nextButton.addEventListener(
        'click',
        () => {

            nextSlide();
            startAutoPlay();

        }
    );


    previousButton.addEventListener(
        'click',
        () => {

            previousSlide();
            startAutoPlay();

        }
    );


    dots.forEach(
        dot => {

            dot.addEventListener(
                'click',
                () => {

                    goToSlide(
                        Number(
                            dot.dataset.index
                        )
                    );

                    startAutoPlay();

                }
            );

        }
    );


    carousel.addEventListener(
        'mouseenter',
        stopAutoPlay
    );


    carousel.addEventListener(
        'mouseleave',
        startAutoPlay
    );



    /*
    |--------------------------------------------------------------------------
    | SWIPE MOBILE
    |--------------------------------------------------------------------------
    */

    let touchStartX = 0;


    carousel.addEventListener(
        'touchstart',
        event => {

            touchStartX =
                event
                    .touches[0]
                    .clientX;

        },
        {
            passive: true
        }
    );


    carousel.addEventListener(
        'touchend',
        event => {

            const touchEndX =
                event
                    .changedTouches[0]
                    .clientX;


            const difference =
                touchStartX
                -
                touchEndX;


            if (
                Math.abs(difference)
                >
                55
            ) {

                if (
                    difference
                    >
                    0
                ) {

                    nextSlide();

                } else {

                    previousSlide();

                }

            }

        },
        {
            passive: true
        }
    );


    startAutoPlay();

</script>

@endsection
