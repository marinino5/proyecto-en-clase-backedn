<nav class="admin-nav">

    <div class="admin-nav-inner">

        <a
            href="{{ route('products.manage') }}"
            class="admin-brand"
        >
            <div class="admin-brand-name">
                ECO<span>VOLT</span>
            </div>

            <div class="admin-brand-tag">
                ADMIN
            </div>
        </a>


        <div class="admin-nav-links">

            <a
                href="{{ route('products.manage') }}"
                class="admin-nav-link {{ request()->routeIs('products.manage') ? 'active' : '' }}"
            >
                Gestión de flota
            </a>

            <a
                href="{{ route('products.create') }}"
                class="admin-nav-link {{ request()->routeIs('products.create') ? 'active' : '' }}"
            >
                + Nuevo vehículo
            </a>

            <a
                href="{{ route('products.index') }}"
                class="admin-nav-link"
            >
                Ver sitio público ↗
            </a>

        </div>


        <div class="admin-nav-account">

            <div class="admin-account-copy">

                <span>
                    Sesión activa
                </span>

                <strong>
                    {{ Auth::user()->name }}
                </strong>

            </div>

            <form
                method="POST"
                action="{{ route('logout') }}"
            >
                @csrf

                <button
                    type="submit"
                    class="admin-logout"
                >
                    Cerrar sesión
                </button>

            </form>

        </div>

    </div>

</nav>


<div class="admin-context-bar">

    <div class="admin-context-inner">

        <span class="admin-context-dot"></span>

        @if (request()->routeIs('products.manage'))

            Gestión de flota

        @elseif (request()->routeIs('products.create'))

            Nuevo vehículo

        @elseif (request()->routeIs('products.edit'))

            Editar vehículo

        @else

            Panel administrativo

        @endif

    </div>

</div>