// resources/views/viajeros/index.blade.php

<h1>Viajeros</h1>

<ul>
    @foreach($viajeros as $viajero)
        <li>
            {{ $viajero->nombre }} ({{ $viajero->direccion }})
            <a href="{{ route('viajeros.show', $viajero->id) }}">Ver</a>
            <a href="{{ route('viajeros.edit', $viajero->id) }}">Editar</a>
            <form action="{{ route('viajeros.destroy', $viajero->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('viajeros.create') }}">Crear nuevo viajero</a>