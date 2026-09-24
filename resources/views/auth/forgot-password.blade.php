<x-guest-layout>


    <!-- =========================================
         ENCABEZADO
    ========================================== -->

    <div class="auth-form-heading">

        <div class="auth-form-kicker">
            ECOVOLT / RECUPERACIÓN
        </div>


        <h2>
            Recuperar acceso
        </h2>


        <p>
            Ingresa el correo electrónico asociado a tu cuenta.
            Te enviaremos un enlace para restablecer la contraseña
            y recuperar el acceso al panel ECOVOLT.
        </p>

    </div>



    <!-- =========================================
         ESTADO DE SESIÓN
    ========================================== -->

    @if (session('status'))

        <div class="auth-alert">

            {{ session('status') }}

        </div>

    @endif



    <!-- =========================================
         FORMULARIO
    ========================================== -->

    <form
        method="POST"
        action="{{ route('password.email') }}"
        class="auth-form"
    >

        @csrf


        <!-- EMAIL -->

        <div class="auth-field">

            <label for="email">
                Correo electrónico
            </label>


            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="admin@ecovolt.com"
                required
                autofocus
                autocomplete="email"
            >


            @error('email')

                <span class="auth-error">

                    {{ $message }}

                </span>

            @enderror

        </div>



        <!-- BOTÓN -->

        <button
            type="submit"
            class="btn btn-primary auth-submit"
        >

            <span>
                Enviar enlace de recuperación
            </span>

            <span>
                →
            </span>

        </button>

    </form>



    <!-- =========================================
         VOLVER A LOGIN
    ========================================== -->

    <div class="auth-switch">

        <p>

            ¿Recordaste tu contraseña?

            <a
                href="{{ route('login') }}"
                class="auth-text-link"
            >
                Volver a iniciar sesión
            </a>

        </p>

    </div>


</x-guest-layout>