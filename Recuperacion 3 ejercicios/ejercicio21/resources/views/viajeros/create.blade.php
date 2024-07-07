// resources/views/viajeros/create.blade.php

<h1>Crear nuevo viajero</h1>

<form action="{{ route('viajeros.store') }}" method="post">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion"><br><br>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono"><br><br>
    <button type="submit">Crear</button>
</form>