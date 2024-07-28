<!DOCTYPE html>
<html>
<head>
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Crear Proyecto</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('/create') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"><br><br>
        
        <label for="fechainicio">Fecha de Inicio:</label>
        <input type="date" id="fechainicio" name="fechainicio" value="{{ old('fechainicio') }}"><br><br>
        
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" value="{{ old('estado') }}"><br><br>
        
        <label for="responsable">Responsable:</label>
        <input type="text" id="responsable" name="responsable" value="{{ old('responsable') }}"><br><br>
        
        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto" step="0.01" value="{{ old('monto') }}"><br><br>
        
        <input type="submit" value="Crear Proyecto">
    </form>
</body>
</html>