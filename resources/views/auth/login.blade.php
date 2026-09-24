<x-guest-layout>


    <!-- =========================================
         ENCABEZADO
    ========================================== -->

    <div class="auth-form-heading">

        <div class="auth-form-kicker">
            ECOVOLT / ADMIN
        </div>


        <h2>
            Iniciar sesión
        </h2>


        <p>

            Ingresa con tu cuenta para acceder
            a la gestión interna de vehículos ECOVOLT.

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
        action="{{ route('login') }}"
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
                autocomplete="username"
            >


            @error('email')

                <span class="auth-error">

                    {{ $message }}

                </span>

            @enderror

        </div>



        <!-- CONTRASEÑA -->

        <div class="auth-field">

            <label for="password">

                Contraseña

            </label>


            <input
                id="password"
                type="password"
                name="password"
                placeholder="••••••••"
                required
                autocomplete="current-password"
            >


            @error('password')

                <span class="auth-error">

                    {{ $message }}

                </span>

            @enderror

        </div>



        <!-- OPCIONES -->

        <div class="auth-options">

            <label
                for="remember_me"
                class="auth-check"
            >

                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                >

                <span>
                    Recordarme
                </span>

            </label>


            @if (Route::has('password.request'))

                <a
                    href="{{ route('password.request') }}"
                    class="auth-text-link"
                >

                    ¿Olvidaste tu contraseña?

                </a>

            @endif

        </div>



        <!-- BOTÓN -->

        <button
            type="submit"
            class="btn btn-primary auth-submit"
        >

            <span>
                Iniciar sesión
            </span>

            <span>
                →
            </span>

        </button>

    </form>



    <!-- =========================================
         REGISTRO
    ========================================== -->

    <div class="auth-switch">

        <p>

            ¿Aún no tienes una cuenta?

            <a
                href="{{ route('register') }}"
                class="auth-text-link"
            >

                Crear acceso

            </a>

        </p>

    </div>


</x-guest-layout>