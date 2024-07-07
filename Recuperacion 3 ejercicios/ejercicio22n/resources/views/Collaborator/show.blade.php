<div class="container">
    <h1>Detalles del Colaborador</h1>
    <p>NIF: {{ $collaborator->nif }}</p>
    <p>Nombre: {{ $collaborator->nombre }}</p>
    <a href="{{ route('Collaborator.index') }}" class="btn btn-secondary">Volver</a>
</div>