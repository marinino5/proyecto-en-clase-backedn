<x-guest-layout>


    <!-- =========================================
         ENCABEZADO
    ========================================== -->

    <div class="auth-form-heading">

        <div class="auth-form-kicker">
            ECOVOLT / ADMIN
        </div>


        <h2>
            Crear acceso
        </h2>


        <p>

            Registra una cuenta para acceder
            al panel interno de administración ECOVOLT.

        </p>

    </div>



    <!-- =========================================
         FORMULARIO
    ========================================== -->

    <form
        method="POST"
        action="{{ route('register') }}"
        class="auth-form"
    >

        @csrf



        <!-- NOMBRE -->

        <div class="auth-field">

            <label for="name">

                Nombre

            </label>


            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Nombre completo"
                required
                autofocus
                autocomplete="name"
            >


            @error('name')

                <span class="auth-error">

                    {{ $message }}

                </span>

            @enderror

        </div>



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
                placeholder="Mínimo 8 caracteres"
                required
                autocomplete="new-password"
            >


            @error('password')

                <span class="auth-error">

                    {{ $message }}

                </span>

            @enderror

        </div>



        <!-- CONFIRMAR CONTRASEÑA -->

        <div class="auth-field">

            <label for="password_confirmation">

                Confirmar contraseña

            </label>


            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                placeholder="Repite la contraseña"
                required
                autocomplete="new-password"
            >

        </div>



        <!-- BOTÓN -->

        <button
            type="submit"
            class="btn btn-primary auth-submit"
        >

            <span>
                Crear cuenta
            </span>

            <span>
                →
            </span>

        </button>

    </form>



    <!-- =========================================
         LOGIN
    ========================================== -->

    <div class="auth-switch">

        <p>

            ¿Ya tienes una cuenta?

            <a
                href="{{ route('login') }}"
                class="auth-text-link"
            >

                Iniciar sesión

            </a>

        </p>

    </div>


</x-guest-layout>