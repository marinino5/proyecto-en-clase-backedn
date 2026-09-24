<!-- =====================================================
     NAVBAR PÚBLICO ECOVOLT
===================================================== -->

<nav
    class="main-nav scrolled"
    id="mainNav"
>

    <div class="nav-inner">


        <!-- =============================================
             LOGO
        ============================================== -->

        <a
            href="{{ url('/') }}"
            class="brand"
        >

            <div class="brand-name">

                ECO<span>VOLT</span>

            </div>

        </a>



        <!-- =============================================
             NAVEGACIÓN
        ============================================== -->

        <div class="nav-links">


            <a
                class="nav-link"
                href="{{ url('/') }}#concepto"
            >
                Concepto
            </a>


            <a
                class="nav-link"
                href="{{ url('/') }}#como-funciona"
            >
                Cómo funciona
            </a>


            <a
                class="nav-link"
                href="{{ url('/') }}#experiencia"
            >
                Experiencia
            </a>


            <a
                class="nav-link"
                href="{{ url('/') }}#impacto"
            >
                Tecnología
            </a>


            <a
                class="nav-link nav-pill"
                href="{{ route('products.index') }}"
            >
                Explorar flota →
            </a>


        </div>

    </div>

</nav>