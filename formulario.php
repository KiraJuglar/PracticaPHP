<!DOCTYPE html>
<html>
    <head>
        <title>HolaMundo</title>
    </head>
    <body>
    <?php
    include('conexion.php');
    ?>
        <h1>Formulario</h1>
        <form action="store.php" method="POST">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre">
            <br>
            <label for="apellidop">Apellido Paterno: </label>
            <input type="text" name="apellidop">
            <br>
            <label for="apellidom">Apellido Materno: </label>
            <input type="text" name="apellidom">
            <br>
            <label for="ocupacion">Ocupacion: </label>
            <select name="ocupacion">
                <option value="estudiante">Estudiante</option>
                <option value="maestro">Maestro</option>
                <option value="administrativo">Administrativo</option>
            </select>
            <br>
            <input type="submit">
            <br>

        </form>
    </body>
</html>