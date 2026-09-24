<x-guest-layout>

    <!-- =========================================
         ENCABEZADO
    ========================================== -->

    <div class="auth-form-heading">

        <div class="auth-form-kicker">
            ECOVOLT / VERIFICACIÓN
        </div>

        <h2>
            Verifica tu correo
        </h2>

        <p>
            Antes de continuar al panel administrativo,
            confirma tu dirección de correo electrónico
            usando el enlace que enviamos a tu bandeja de entrada.
        </p>

    </div>


    <!-- =========================================
         MENSAJE DE ESTADO
    ========================================== -->

    @if (session('status') == 'verification-link-sent')

        <div class="auth-alert">

            Se envió un nuevo enlace de verificación
            al correo electrónico asociado a tu cuenta.

        </div>

    @endif


    <!-- =========================================
         ACCIONES
    ========================================== -->

    <div class="auth-form">


        <!-- REENVIAR ENLACE -->

        <form
            method="POST"
            action="{{ route('verification.send') }}"
        >

            @csrf

            <button
                type="submit"
                class="btn btn-primary auth-submit"
            >

                <span>
                    Reenviar correo de verificación
                </span>

                <span>
                    →
                </span>

            </button>

        </form>


        <!-- CERRAR SESIÓN -->

        <form
            method="POST"
            action="{{ route('logout') }}"
        >

            @csrf

            <button
                type="submit"
                class="auth-secondary-button"
            >
                Cerrar sesión
            </button>

        </form>

    </div>


</x-guest-layout>