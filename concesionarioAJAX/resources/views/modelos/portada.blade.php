<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos - Portada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        .modelo-card {
            transition: transform 0.2s;
        }

        .modelo-card:hover {
            transform: scale(1.05);
        }

        .modelo-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .marca-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 10;
        }
    </style>
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <i class="bi bi-box"></i> Catálogo de Modelos
        </a>
        <div>
            <a href="/admin/marcas" class="btn btn-outline-light btn-sm me-2">
                <i class="bi bi-tags"></i> Marcas
            </a>
            <a href="/admin/modelos" class="btn btn-outline-light btn-sm">
                <i class="bi bi-gear"></i> Modelos
            </a>
        </div>
    </div>
</nav>

<div class="container my-5">

    <!-- Selector de Marca -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <h5 class="mb-0">
                                <i class="bi bi-funnel"></i> Filtrar por marca:
                            </h5>
                        </div>
                        <div class="col-md-9">
                            <select
                                class="form-select form-select-lg"
                                id="marcaSelect"
                            >
                                <option value="">Todas las marcas</option>
                                @print_r($marcas);
                                @foreach($marcas as $marca)
                                    <option value="{{ $marca->id }}">
                                        {{ $marca->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Área de Modelos -->
    <div id="areaPeliculas"></div>

    <div class="text-center py-5 d-none" id="cargandoPeliculas">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;"></div>
        <p class="mt-3 text-muted">Cargando modelos...</p>
    </div>

</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2025 Catálogo de Modelos</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    cargarTodosLosModelos();
});

document.getElementById('marcaSelect').addEventListener('change', () => {
    cargarModelosPorMarca();
});

function mostrarCargando() {
    document.getElementById('cargandoPeliculas').classList.remove('d-none');
    document.getElementById('areaPeliculas').innerHTML = '';
}

function ocultarCargando() {
    document.getElementById('cargandoPeliculas').classList.add('d-none');
}

async function cargarTodosLosModelos() {
    try {
        mostrarCargando();
        const response = await fetch('/api/modelos');
        if (!response.ok) throw new Error();
        const modelos = await response.json();
        mostrarModelos(modelos, 'Todos los modelos');
    } catch {
        mostrarError('No se pudieron cargar los modelos.');
    } finally {
        ocultarCargando();
    }
}

async function cargarModelosPorMarca() {
    const marcaId = document.getElementById('marcaSelect').value;

    if (!marcaId) {
        cargarTodosLosModelos();
        return;
    }

    try {
        mostrarCargando();
        const response = await fetch(`/api/marcas/${marcaId}/modelos`);
        if (!response.ok) throw new Error();

        const modelos = await response.json();
        const marcaNombre = document.getElementById('marcaSelect').selectedOptions[0].text;
        mostrarModelos(modelos, `Modelos de ${marcaNombre}`);
    } catch {
        mostrarError('No se pudieron cargar los modelos de la marca.');
    } finally {
        ocultarCargando();
    }
}

function mostrarModelos(modelos, titulo) {
    const area = document.getElementById('areaPeliculas');

    if (modelos.length === 0) {
        area.innerHTML = `
            <div class="alert alert-info text-center">
                <h4>No hay modelos en esta marca</h4>
            </div>`;
        return;
    }

    let html = `
        <h2 class="text-center mb-4">${titulo}
            <span class="badge bg-primary">${modelos.length}</span>
        </h2>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
    `;

    modelos.forEach(item => {
    html += `
    <div class="col">
        <div class="card h-100 shadow modelo-card">
            <div class="position-relative">
                <!-- Badge de marca -->
                <span class="badge bg-info marca-badge">${item.marca?.nombre ?? 'Sin marca'}</span>

                <img src="${item.imagen ?? 'https://placehold.co/300x400'}"
                     class="card-img-top modelo-img"
                     alt="${item.nombre}"
                     onerror="this.src='https://placehold.co/300x400?text=Sin+Imagen'">
            </div>

            <div class="card-body d-flex flex-column">
                <h5 class="card-title">${item.nombre}</h5>

                <div class="mt-auto">
                    ${
                        item.url_compra
                        ? `
                            <a href="${item.url_compra}"
                               target="_blank"
                               class="btn btn-success w-100">
                                <i class="bi bi-cart-check"></i> Comprar
                            </a>
                          `
                        : `
                            <button class="btn btn-secondary w-100" disabled>
                                <i class="bi bi-x-circle"></i> Sin enlace de compra
                            </button>
                          `
                    }
                </div>
            </div>
        </div>
    </div>
`;

});


    html += `</div>`;
    area.innerHTML = html;
}

function mostrarError(mensaje) {
    document.getElementById('areaPeliculas').innerHTML = `
        <div class="alert alert-danger text-center">
            <p>${mensaje}</p>
            <button class="btn btn-danger" onclick="cargarTodosLosModelos()">Reintentar</button>
        </div>`;
}
</script>

</body>
</html>
