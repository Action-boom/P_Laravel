<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Crear nuevo producto</h1>
    <div class="main-content">
        <div class="card">
            <form method="POST" action="{{ route('productos.store') }}">
                @csrf
                <label>Nombre:</label>
                <input type="text" name="nombre" required>
                <label>Descripción:</label>
                <textarea name="descripcion"></textarea>
                <label>Precio:</label>
                <input type="number" name="precio" step="0.01" required>
                <button type="submit" class="btn">Guardar</button>
            </form>
            <a href="{{ route('productos.index') }}" class="btn" style="margin-top:10px;">Volver al listado</a>
        </div>
    </div>
</body>
</html>