<!-- resources/views/Collaborator/create.blade.php -->

<h1>Crear nuevo colaborador</h1>

<form action="{{ route('Collaborator.store') }}" method="post">
    @csrf
    <label for="nif">NIF:</label>
    <input type="text" id="nif" name="nif"><br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <input type="submit" value="Crear">
</form>