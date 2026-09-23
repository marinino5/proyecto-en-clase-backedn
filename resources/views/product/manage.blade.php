@extends('layout.app')

@section('title', 'Gestión de flota | ECOVOLT')

@section('content')

<main class="create-page">

    <!-- =====================================================
         CABECERA
    ====================================================== -->

    <section class="create-heading">

        <div class="container create-heading-grid">

            <div>

                <div class="eyebrow">
                    Gestión interna
                </div>

                <h1 class="create-title">

                    GESTIÓN

                    <br>

                    DE FLOTA

                    <span>
                        ECOVOLT.
                    </span>

                </h1>

            </div>


            <div class="create-heading-copy">

                <p>

                    Administra los vehículos registrados,
                    actualiza su información y controla
                    los elementos disponibles dentro
                    del catálogo ECOVOLT.

                </p>


                <div class="create-status">

                    <span class="create-status-dot"></span>

                    Panel administrativo

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         CONTENIDO ADMINISTRATIVO
    ====================================================== -->

    <section class="create-content">

        <div class="container">

            <div class="create-form-card">


                <!-- =================================================
                     ENCABEZADO
                ================================================== -->

                <div class="create-form-header">

                    <div>

                        <span class="create-step">
                            01 · Administración
                        </span>

                        <h2>
                            Vehículos registrados
                        </h2>

                    </div>


                    <span class="create-index">
                        ECOVOLT / ADMIN
                    </span>

                </div>



                <!-- =================================================
                     ACCIONES SUPERIORES
                ================================================== -->

                <div
                    style="
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        gap: 20px;
                        flex-wrap: wrap;
                        margin-bottom: 34px;
                        padding-bottom: 28px;
                        border-bottom: 1px solid rgba(0, 0, 0, 0.10);
                    "
                >

                    <div>

                        <div class="eyebrow">
                            Flota activa
                        </div>

                        <p
                            style="
                                margin: 8px 0 0;
                                max-width: 620px;
                            "
                        >
                            Consulta y administra los vehículos
                            almacenados actualmente en el sistema.
                        </p>

                    </div>


                    <a
                        href="{{ route('products.create') }}"
                        class="btn btn-primary"
                    >
                        Nuevo vehículo

                        <span>
                            +
                        </span>
                    </a>

                </div>



                <!-- =================================================
                     MENSAJE DE ÉXITO
                ================================================== -->

                @if (session('success'))

                    <div
                        style="
                            margin-bottom: 28px;
                            padding: 16px 20px;
                            border: 1px solid #78ea5d;
                            border-radius: 16px;
                            background: rgba(120, 234, 93, 0.08);
                        "
                    >
                        {{ session('success') }}
                    </div>

                @endif



                <!-- =================================================
                     LISTADO
                ================================================== -->

                @forelse ($products as $producto)

                    <div
                        style="
                            display: grid;
                            grid-template-columns: 1fr auto;
                            gap: 30px;
                            align-items: center;
                            padding: 28px 0;
                            border-bottom: 1px solid rgba(0, 0, 0, 0.10);
                        "
                    >

                        <!-- INFORMACIÓN -->

                        <div>

                            <div class="eyebrow">

                                {{ $producto->category?->name ?? 'Movilidad eléctrica' }}

                            </div>


                            <h3
                                style="
                                    margin: 10px 0 10px;
                                    font-size: 26px;
                                "
                            >
                                {{ $producto->name }}
                            </h3>


                            <p
                                style="
                                    margin: 0 0 12px;
                                    max-width: 760px;
                                    line-height: 1.6;
                                "
                            >
                                {{ $producto->description }}
                            </p>


                            <strong
                                style="
                                    font-size: 18px;
                                "
                            >
                                ${{ number_format((float) $producto->price, 0, ',', '.') }} COP
                            </strong>

                        </div>



                        <!-- ACCIONES -->

                        <div
                            style="
                                display: flex;
                                gap: 12px;
                                flex-wrap: wrap;
                                justify-content: flex-end;
                            "
                        >

                            <a
                                href="{{ route('products.show', $producto) }}"
                                class="btn btn-outline-dark"
                            >
                                Ver
                            </a>


                            <a
                                href="{{ route('products.edit', $producto) }}"
                                class="btn btn-outline-dark"
                            >
                                Editar
                            </a>


                            <form
                                action="{{ route('products.destroy', $producto) }}"
                                method="POST"
                                style="margin: 0;"
                            >

                                @csrf
                                @method('DELETE')


                                <button
                                    type="submit"
                                    class="btn btn-outline-dark"
                                    onclick="return confirm('¿Seguro que deseas eliminar este vehículo? Esta acción no se puede deshacer.')"
                                >
                                    Eliminar
                                </button>

                            </form>

                        </div>

                    </div>


                @empty

                    <div class="empty-state">

                        <div class="eyebrow">
                            Gestión de flota
                        </div>

                        <h2>
                            No hay vehículos registrados.
                        </h2>

                        <p>
                            Utiliza el botón “Nuevo vehículo”
                            para agregar el primer registro.
                        </p>


                        <a
                            href="{{ route('products.create') }}"
                            class="btn btn-primary"
                        >
                            Crear vehículo
                        </a>

                    </div>

                @endforelse



                <!-- =================================================
                     PAGINACIÓN
                ================================================== -->

                @if ($products->hasPages())

                    <div
                        style="
                            margin-top: 38px;
                            padding-top: 28px;
                        "
                    >

                        {{ $products->links() }}

                    </div>

                @endif



                <!-- =================================================
                     REGRESO
                ================================================== -->

                <div
                    style="
                        margin-top: 34px;
                        padding-top: 28px;
                        border-top: 1px solid rgba(0, 0, 0, 0.10);
                    "
                >

                    <a
                        href="{{ route('products.index') }}"
                        class="btn btn-outline-dark"
                    >
                        ← Ver flota pública
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

@endsection