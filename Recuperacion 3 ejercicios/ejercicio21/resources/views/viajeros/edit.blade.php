// resources/views/viajeros/edit.blade.php

<h1>Editar viajero {{ $viajero->nombre }}</h1>

<form action="{{ route('viajeros.update', $viajero->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $viajero->nombre }}"><br><br>
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="{{ $viajero->direccion }}"><br><br>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" value="{{ $viajero->telefono }}"><br><br>
    <button type="submit">Actualizar</button>
</form>