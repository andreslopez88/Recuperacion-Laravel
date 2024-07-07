<!-- resources/views/Collaborator/edit.blade.php -->

<h1>Editar colaborador {{ $collaborator->nombre }} ({{ $collaborator->nif }})</h1>

<form action="{{ route('Collaborator.update', $collaborator->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="nif">NIF:</label>
    <input type="text" id="nif" name="nif" value="{{ $collaborator->nif }}"><br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $collaborator->nombre }}"><br><br>
    <input type="submit" value="Actualizar">
</form>