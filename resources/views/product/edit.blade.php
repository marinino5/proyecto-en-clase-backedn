@extends('layout.app')

@section('title', 'Editar vehículo | ECOVOLT')

@section('content')

<main class="create-page">

    <section class="create-heading">

        <div class="container create-heading-grid">

            <div>

                <div class="eyebrow">
                    Gestión interna
                </div>

                <h1 class="create-title">
                    EDITAR
                    <br>
                    VEHÍCULO
                    <span>
                        ECOVOLT.
                    </span>
                </h1>

            </div>

            <div class="create-heading-copy">

                <p>
                    Actualiza la información del vehículo
                    seleccionado y mantén los datos de la flota
                    organizados y consistentes.
                </p>

                <div class="create-status">

                    <span class="create-status-dot"></span>

                    Edición de vehículo

                </div>

            </div>

        </div>

    </section>


    <section class="create-content">

        <div class="container create-layout">

            <div class="create-form-card">

                <div class="create-form-header">

                    <div>

                        <span class="create-step">
                            01 · Actualización de información
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
                    action="{{ route('products.update', $product) }}"
                    method="POST">

                    @csrf
                    @method('PUT')


                    <div class="form-grid">

                        <div class="form-group form-group-full">

                            <label for="name">
                                Nombre del vehículo
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name', $product->name) }}"
                                placeholder="Ej. Urban Glide"
                                required>

                            @error('name')
                                <small class="form-error">
                                    {{ $message }}
                                </small>
                            @else
                                <small>
                                    Utiliza un nombre corto
                                    y fácil de identificar.
                                </small>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="price">
                                Tarifa
                            </label>

                            <div class="input-prefix">

                                <span>
                                    $
                                </span>

                                <input
                                    type="number"
                                    id="price"
                                    name="price"
                                    min="0"
                                    step="0.01"
                                    value="{{ old('price', $product->price) }}"
                                    placeholder="8500"
                                    required>

                            </div>

                            @error('price')
                                <small class="form-error">
                                    {{ $message }}
                                </small>
                            @else
                                <small>
                                    Valor de referencia en COP.
                                </small>
                            @enderror

                        </div>


                        <div class="form-group">

                            <label for="category_id">
                                Categoría
                            </label>

                            <select
                                id="category_id"
                                name="category_id"
                                required>

                                <option value="">
                                    Selecciona una categoría
                                </option>

                                @foreach ($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>

                                        {{ $category->name }}

                                    </option>

                                @endforeach

                            </select>

                            @error('category_id')
                                <small class="form-error">
                                    {{ $message }}
                                </small>
                            @else
                                <small>
                                    Define la función principal
                                    del vehículo dentro de la flota.
                                </small>
                            @enderror

                        </div>


                        <div class="form-group form-group-full">

                            <label for="description">
                                Descripción
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                rows="6"
                                placeholder="Describe el tipo de recorrido, uso recomendado y principales características..."
                                required>{{ old('description', $product->description) }}</textarea>

                            <div class="textarea-footer">

                                @error('description')
                                    <small class="form-error">
                                        {{ $message }}
                                    </small>
                                @else
                                    <small>
                                        Mantén la descripción clara
                                        y evita repetir categoría o tarifa.
                                    </small>
                                @enderror

                                <span id="characterCount">
                                    {{ strlen(old('description', $product->description)) }} caracteres
                                </span>

                            </div>

                        </div>

                    </div>


                    <div class="create-form-actions">

                        <a
                            href="{{ route('products.index') }}"
                            class="btn btn-outline-dark">

                            ← Volver a la flota

                        </a>

                        <button
                            type="submit"
                            class="btn btn-primary">

                            Guardar cambios

                            <span>
                                ↗
                            </span>

                        </button>

                    </div>

                </form>

            </div>


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

                        {{ $product->category?->name ?? 'Movilidad eléctrica' }}

                    </div>

                    <h3 id="previewName">
                        {{ $product->name }}
                    </h3>

                    <p id="previewDescription">
                        {{ $product->description }}
                    </p>


                    <div class="preview-price-row">

                        <div>

                            <span>
                                Tarifa
                            </span>

                            <strong id="previewPrice">
                                ${{ number_format($product->price, 0, ',', '.') }} COP
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
                        Revisa los cambios antes de actualizar
                        definitivamente la información del
                        vehículo dentro del catálogo.
                    </p>

                </div>

            </aside>

        </div>

    </section>

</main>

@endsection


@push('scripts')

<script>

    const nameInput =
        document.getElementById('name');

    const priceInput =
        document.getElementById('price');

    const categoryInput =
        document.getElementById('category_id');

    const descriptionInput =
        document.getElementById('description');

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


    const localImages = {

        'Patineta eléctrica':
            "{{ asset('images/flota-scooter.png') }}",

        'Bicicleta eléctrica':
            "{{ asset('images/flota-bike.png') }}",

        'Movilidad conectada':
            "{{ asset('images/flota-connect.png') }}"

    };


    function updateCategoryPreview() {

        const selectedOption =
            categoryInput.options[
                categoryInput.selectedIndex
            ];

        const categoryName =
            selectedOption
                ? selectedOption.text.trim()
                : '';

        previewCategory.textContent =
            categoryName &&
            categoryInput.value
                ? categoryName
                : 'Movilidad eléctrica';

        if (localImages[categoryName]) {

            previewImage.src =
                localImages[categoryName];

        } else {

            previewImage.src =
                "{{ asset('images/ecovolt-estacion-lifestyle.png') }}";

        }

    }


    nameInput.addEventListener(
        'input',
        function () {

            previewName.textContent =
                this.value.trim()
                ||
                'Nuevo vehículo';

        }
    );


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
                value.toLocaleString('es-CO')
                +
                ' COP';

        }
    );


    categoryInput.addEventListener(
        'change',
        updateCategoryPreview
    );


    descriptionInput.addEventListener(
        'input',
        function () {

            previewDescription.textContent =
                this.value.trim()
                ||
                'La descripción aparecerá aquí.';

            characterCount.textContent =
                this.value.length
                +
                ' caracteres';

        }
    );


    updateCategoryPreview();

</script>

@endpush