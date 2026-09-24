<x-guest-layout>

    <div class="auth-form-heading">

        <div class="auth-form-kicker">
            ECOVOLT / SEGURIDAD
        </div>

        <h2>
            Nueva contraseña
        </h2>

        <p>
            Define una nueva contraseña para recuperar el acceso
            a tu cuenta administrativa ECOVOLT.
        </p>

    </div>


    <form
        method="POST"
        action="{{ route('password.store') }}"
        class="auth-form"
    >

        @csrf

        <input
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}"
        >


        <div class="auth-field">

            <label for="email">
                Correo electrónico
            </label>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email', $request->email) }}"
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


        <div class="auth-field">

            <label for="password">
                Nueva contraseña
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


        <div class="auth-field">

            <label for="password_confirmation">
                Confirmar nueva contraseña
            </label>

            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                placeholder="Repite la nueva contraseña"
                required
                autocomplete="new-password"
            >

        </div>


        <button
            type="submit"
            class="btn btn-primary auth-submit"
        >

            <span>
                Restablecer contraseña
            </span>

            <span>
                →
            </span>

        </button>

    </form>


    <div class="auth-switch">

        <p>

            ¿Ya recuperaste tu acceso?

            <a
                href="{{ route('login') }}"
                class="auth-text-link"
            >
                Volver a iniciar sesión
            </a>

        </p>

    </div>

</x-guest-layout>