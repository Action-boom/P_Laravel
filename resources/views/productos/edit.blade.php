<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto | Catálogo</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>✏️ Editar Producto</h1>
    <div class="main-content">
        <div class="card">
            <form method="POST" action="{{ route('productos.update', $producto) }}">
                @csrf
                @method('PUT')
                
                <div>
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" placeholder="Nombre del producto" required>
                </div>

                <div>
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Descripción del producto...">{{ $producto->descripcion }}</textarea>
                </div>

                <div>
                    <label for="precio">Precio (USD)</label>
                    <input type="number" id="precio" name="precio" step="0.01" value="{{ $producto->precio }}" placeholder="0.00" required>
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" class="btn" style="flex: 1;">✓ Actualizar Producto</button>
                    <a href="{{ route('productos.index') }}" class="btn" style="flex: 1; background: linear-gradient(135deg, #6b7280, #4b5563); text-align: center;">← Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>