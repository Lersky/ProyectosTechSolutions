<!DOCTYPE html>
<html>
<head>
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Crear Proyecto</h1>
    <form action="/create" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="fechainicio">Fecha de Inicio:</label>
        <input type="date" id="fechainicio" name="fechainicio"><br><br>
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado"><br><br>
        <label for="responsable">Responsable:</label>
        <input type="text" id="responsable" name="responsable"><br><br>
        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto" step="0.01"><br><br>
        <input type="submit" value="Crear Proyecto">
    </form>
</body>
</html>
