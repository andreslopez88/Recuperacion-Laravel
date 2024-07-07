<!-- resources/views/Collaborator/index.blade.php -->

<h1>Lista de Colaboradores</h1>

<ul>
    @foreach($collaborator as $collaborator)
    <li>
        {{ $collaborator->nombre }} ({{ $collaborator->nif }})
        <a href="{{ route('Collaborator.show', $collaborator->id) }}">Ver</a>
        <a href="{{ route('Collaborator.edit', $collaborator->id) }}">Editar</a>
    </li>
    @endforeach
</ul>

<a href="{{ route('Collaborator.create') }}">Crear nuevo colaborador</a>