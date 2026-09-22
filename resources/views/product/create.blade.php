@extends('layout.app')

@section('title', 'Nuevo vehículo | ECOVOLT')


@section('content')


<!-- =====================================================
     CREATE PAGE
===================================================== -->

<main class="create-page">


    <!-- =================================================
         HERO / CABECERA
    ================================================== -->

    <section class="create-heading">


        <div class="container create-heading-grid">


            <div>


                <div class="eyebrow">

                    Gestión interna

                </div>


                <h1 class="create-title">

                    NUEVO

                    <br>

                    VEHÍCULO

                    <span>
                        ECOVOLT.
                    </span>

                </h1>

            </div>



            <div class="create-heading-copy">


                <p>

                    Registra una nueva alternativa dentro
                    de la flota y organiza su información
                    principal para mantener un catálogo
                    claro y coherente.

                </p>


                <div class="create-status">


                    <span class="create-status-dot"></span>


                    Panel de gestión de flota

                </div>

            </div>

        </div>

    </section>



    <!-- =================================================
         CONTENIDO
    ================================================== -->

    <section class="create-content">


        <div class="container create-layout">


            <!-- =================================================
                 FORMULARIO
            ================================================== -->

            <div class="create-form-card">


                <div class="create-form-header">


                    <div>


                        <span class="create-step">

                            01 · Información principal

                        </span>


                        <h2>
                            Datos del vehículo
                        </h2>

                    </div>



                    <span class="create-index">

                        ECOVOLT / ADMIN

                    </span>

                </div>



                <form
                    id="vehicleForm"
                    action="#"
                    method="POST">


                    @csrf


                    <div class="form-grid">


                        <!-- NOMBRE -->

                        <div class="form-group form-group-full">


                            <label for="name">

                                Nombre del vehículo

                            </label>


                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Ej. Urban Glide"
                                required>


                            <small>

                                Utiliza un nombre corto
                                y fácil de identificar.

                            </small>

                        </div>



                        <!-- PRECIO -->

                        <div class="form-group">


                            <label for="precio">

                                Tarifa

                            </label>


                            <div class="input-prefix">


                                <span>
                                    $
                                </span>


                                <input
                                    type="number"
                                    id="precio"
                                    name="precio"
                                    min="0"
                                    placeholder="8500"
                                    required>

                            </div>


                            <small>

                                Valor de referencia en COP.

                            </small>

                        </div>



                        <!-- CATEGORÍA -->

                        <div class="form-group">


                            <label for="categoria">

                                Categoría

                            </label>


                            <select
                                id="categoria"
                                name="categoria"
                                required>


                                <option value="">

                                    Selecciona una categoría

                                </option>


                                <option value="Patineta eléctrica">

                                    Patineta eléctrica

                                </option>


                                <option value="Bicicleta eléctrica">

                                    Bicicleta eléctrica

                                </option>


                                <option value="Movilidad conectada">

                                    Movilidad conectada

                                </option>

                            </select>


                            <small>

                                Define la función principal
                                del vehículo dentro de la flota.

                            </small>

                        </div>



                        <!-- IMAGEN -->

                        <div class="form-group form-group-full">


                            <label for="urlimagen">

                                URL de imagen

                            </label>


                            <input
                                type="url"
                                id="urlimagen"
                                name="urlimagen"
                                placeholder="https://ejemplo.com/vehiculo.jpg">


                            <small>

                                Este campo se conserva porque forma
                                parte de la estructura del ejercicio.
                                Si permanece vacío, la vista previa
                                utilizará imágenes locales de ECOVOLT.

                            </small>

                        </div>



                        <!-- DESCRIPCIÓN -->

                        <div class="form-group form-group-full">


                            <label for="descrip">

                                Descripción

                            </label>


                            <textarea
                                id="descrip"
                                name="descrip"
                                rows="6"
                                placeholder="Describe el tipo de recorrido, uso recomendado y principales características..."
                                required></textarea>


                            <div class="textarea-footer">


                                <small>

                                    Mantén la descripción clara
                                    y evita repetir categoría o tarifa.

                                </small>


                                <span id="characterCount">

                                    0 caracteres

                                </span>

                            </div>

                        </div>

                    </div>



                    <!-- ACCIONES -->

                    <div class="create-form-actions">


                        <a
                            href="{{ url('/product') }}"
                            class="btn btn-outline-dark">

                            ← Volver a la flota

                        </a>


                        <button
                            type="submit"
                            class="btn btn-primary">

                            Vista lista

                            <span>
                                ↗
                            </span>

                        </button>

                    </div>

                </form>

            </div>



            <!-- =================================================
                 PREVIEW
            ================================================== -->

            <aside class="create-preview">


                <div class="preview-label">

                    Vista previa

                </div>



                <div class="preview-image-wrap">


                    <img
                        id="previewImage"
                        src="{{ asset('images/ecovolt-estacion-lifestyle.png') }}"
                        alt="Vista previa del vehículo">


                    <div class="preview-availability">


                        <span></span>


                        Disponible

                    </div>

                </div>



                <div class="preview-body">


                    <div
                        class="preview-category"
                        id="previewCategory">

                        Movilidad eléctrica

                    </div>


                    <h3 id="previewName">

                        Nuevo vehículo

                    </h3>


                    <p id="previewDescription">

                        La descripción aparecerá aquí
                        mientras completas la información
                        del vehículo.

                    </p>



                    <div class="preview-price-row">


                        <div>


                            <span>
                                Tarifa
                            </span>


                            <strong id="previewPrice">

                                $0 COP

                            </strong>

                        </div>



                        <div class="preview-electric">

                            ⚡ Electric

                        </div>

                    </div>

                </div>



                <div class="preview-note">


                    <span>
                        02
                    </span>


                    <p>

                        Esta vista te permite revisar
                        la jerarquía visual antes de
                        incorporar un vehículo al catálogo.

                    </p>

                </div>

            </aside>

        </div>

    </section>

</main>


@endsection


<!-- =====================================================
     JAVASCRIPT ESPECÍFICO DE CREATE
===================================================== -->

@push('scripts')

<script>

    const nameInput =
        document.getElementById('name');


    const priceInput =
        document.getElementById('precio');


    const categoryInput =
        document.getElementById('categoria');


    const imageInput =
        document.getElementById('urlimagen');


    const descriptionInput =
        document.getElementById('descrip');


    const previewName =
        document.getElementById('previewName');


    const previewPrice =
        document.getElementById('previewPrice');


    const previewCategory =
        document.getElementById('previewCategory');


    const previewImage =
        document.getElementById('previewImage');


    const previewDescription =
        document.getElementById('previewDescription');


    const characterCount =
        document.getElementById('characterCount');



    /*
    |--------------------------------------------------------------------------
    | IMÁGENES LOCALES SEGÚN CATEGORÍA
    |--------------------------------------------------------------------------
    */

    const localImages = {

        'Patineta eléctrica':
            "{{ asset('images/flota-scooter.png') }}",

        'Bicicleta eléctrica':
            "{{ asset('images/flota-bike.png') }}",

        'Movilidad conectada':
            "{{ asset('images/flota-connect.png') }}"

    };



    /*
    |--------------------------------------------------------------------------
    | NOMBRE
    |--------------------------------------------------------------------------
    */

    nameInput.addEventListener(
        'input',
        function () {

            previewName.textContent =
                this.value.trim()
                ||
                'Nuevo vehículo';

        }
    );



    /*
    |--------------------------------------------------------------------------
    | PRECIO
    |--------------------------------------------------------------------------
    */

    priceInput.addEventListener(
        'input',
        function () {

            const value =
                Number(
                    this.value
                    ||
                    0
                );


            previewPrice.textContent =
                '$'
                +
                value.toLocaleString(
                    'es-CO'
                )
                +
                ' COP';

        }
    );



    /*
    |--------------------------------------------------------------------------
    | CATEGORÍA
    |--------------------------------------------------------------------------
    */

    categoryInput.addEventListener(
        'change',
        function () {

            const category =
                this.value;


            previewCategory.textContent =
                category
                ||
                'Movilidad eléctrica';


            if (
                !imageInput.value.trim()
                &&
                localImages[category]
            ) {

                previewImage.src =
                    localImages[category];

            }

        }
    );



    /*
    |--------------------------------------------------------------------------
    | DESCRIPCIÓN
    |--------------------------------------------------------------------------
    */

    descriptionInput.addEventListener(
        'input',
        function () {

            previewDescription.textContent =
                this.value.trim()
                ||
                'La descripción aparecerá aquí mientras completas la información del vehículo.';


            characterCount.textContent =
                this.value.length
                +
                ' caracteres';

        }
    );



    /*
    |--------------------------------------------------------------------------
    | IMAGEN PERSONALIZADA
    |--------------------------------------------------------------------------
    */

    imageInput.addEventListener(
        'input',
        function () {

            const value =
                this.value.trim();


            if (value) {

                previewImage.src =
                    value;

            } else {

                const category =
                    categoryInput.value;


                if (
                    localImages[category]
                ) {

                    previewImage.src =
                        localImages[category];

                } else {

                    previewImage.src =
                        "{{ asset('images/ecovolt-estacion-lifestyle.png') }}";

                }

            }

        }
    );



    document
        .getElementById(
            'vehicleForm'
        )
        .addEventListener(
            'submit',
            function (event) {

                event.preventDefault();

            }
        );

</script>

@endpush