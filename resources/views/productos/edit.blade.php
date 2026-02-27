<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Editar producto</h1>
    <div class="main-content">
        <div class="card">
            <form method="POST" action="{{ route('productos.update', $producto) }}">
                @csrf
                @method('PUT')
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" required>
                <label>Descripción:</label>
                <textarea name="descripcion">{{ $producto->descripcion }}</textarea>
                <label>Precio:</label>
                <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}" required>
                <button type="submit" class="btn">Actualizar</button>
            </form>
            <a href="{{ route('productos.index') }}" class="btn" style="margin-top:10px;">Volver al listado</a>
        </div>
    </div>
</body>
</html>