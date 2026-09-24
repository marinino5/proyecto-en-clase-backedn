<x-guest-layout>

    <!-- =========================================
         ENCABEZADO
    ========================================== -->

    <div class="auth-form-heading">

        <div class="auth-form-kicker">
            ECOVOLT / SEGURIDAD
        </div>

        <h2>
            Confirmar acceso
        </h2>

        <p>
            Esta es una zona segura del sistema.
            Confirma tu contraseña antes de continuar
            con esta acción administrativa.
        </p>

    </div>


    <!-- =========================================
         FORMULARIO
    ========================================== -->

    <form
        method="POST"
        action="{{ route('password.confirm') }}"
        class="auth-form"
    >

        @csrf


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
                autofocus
            >

            @error('password')

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
                Confirmar contraseña
            </span>

            <span>
                →
            </span>

        </button>

    </form>


    <!-- =========================================
         REGRESO
    ========================================== -->

    <div class="auth-switch">

        <p>

            ¿No necesitas continuar con esta acción?

            <a
                href="{{ route('products.manage') }}"
                class="auth-text-link"
            >
                Volver a gestión de flota
            </a>

        </p>

    </div>

</x-guest-layout>