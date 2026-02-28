<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>📦 Catálogo de Productos</h1>
    <div class="main-content">
        <div class="card">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
                <h2 style="margin: 0;">Gestión de Inventario</h2>
                <a href="{{ route('productos.create') }}" class="btn">+ Crear Nuevo Producto</a>
            </div>

            @if (session('success'))
                <div class="success-message">
                    <strong>✓ Éxito:</strong> {{ session('success') }}
                </div>
            @endif

            @if ($productos->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th style="width: 80px;">ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th style="width: 120px;">Precio</th>
                            <th style="width: 250px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td><strong>#{{ $producto->id }}</strong></td>
                            <td><strong>{{ $producto->nombre }}</strong></td>
                            <td>{{ Str::limit($producto->descripcion ?? 'Sin descripción', 50) }}</td>
                            <td><strong style="color: var(--primary-green);">${{ number_format($producto->precio, 2) }}</strong></td>
                            <td>
                                <a href="{{ route('productos.edit', $producto) }}" class="btn" style="padding: 0.6rem 1.2rem; font-size: 0.85rem; background: linear-gradient(135deg, #3b82f6, #2563eb);">✏️ Editar</a>
                                <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="padding: 0.6rem 1.2rem; font-size: 0.85rem;" onclick="return confirm('¿Eliminar este producto? Esta acción no se puede deshacer.')">🗑️ Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 2px solid var(--border-light); text-align: center; color: var(--text-light);">
                    <strong style="color: var(--primary-green);">{{ $productos->count() }}</strong> producto(s) en el catálogo
                </div>
            @else
                <div style="text-align: center; padding: 3rem; background: var(--lighter-green); border-radius: 8px; border: 2px dashed var(--primary-green);">
                    <p style="font-size: 1.25rem; margin: 0; color: var(--primary-green);">📭 No hay productos aún</p>
                    <p style="margin-top: 0.5rem;">Comienza creando tu primer producto</p>
                    <a href="{{ route('productos.create') }}" class="btn" style="margin-top: 1rem; display: inline-flex;">+ Crear Primer Producto</a>
                </div>
            @endif
        </div>
    </div>
</body>
</html>