// resources/views/viajeros/show.blade.php

<h1>Viajero {{ $viajero->nombre }}</h1>

<p>Dirección: {{ $viajero->direccion }}</p>
<p>Teléfono: {{ $viajero->telefono }}</p>

<a href="{{ route('viajeros.index') }}">Volver a la lista de viajeros</a>