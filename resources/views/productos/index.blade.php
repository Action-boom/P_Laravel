<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Productos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Catálogo de Productos</h1>
    <div class="main-content">
        <div class="card" style="width: min(95vw,700px);">
            <a href="{{ route('productos.create') }}" class="btn" style="float:right;margin-bottom:10px;">Crear nuevo producto</a>
            <div style="clear:both"></div>
            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>${{ $producto->precio }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>