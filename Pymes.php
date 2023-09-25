<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Pymes.css">
    <title>Pymes</title>
</head>
<body>
    <center>
        <div class="container">
   
    <form class="Formulario" method="POST" action="EmpleadosPymes.php">
    <h1 class="titulo">Registro de Empleados</h1>
    

        <label for="cedula">Cedula:</label>
        <input type="text" name="cedula" required><br><br>
        

        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br><br>

        <label for="dias_trabajados">Días Trabajados:</label>
        <input type="number" name="dias_trabajados" required min="0"><br><br>

        <label for="salario_mensual">Salario Mensual:</label>
        <input type="number" name="salario_mensual" required min="0"><br><br>

        <label for="auxilio_de_transporte">Auxilio De Transporte:</label>
        <input type="number" name="auxilio_de_transporte" required><br><br>


        <label for="inasistencias">Inasistencias:</label>
        <input type="number" name="inasistencias" required><br><br>

        <label for="novedades">Novedades de Inasistencias:</label>
        <textarea name="novedades" rows="4" cols="50"></textarea><br><br>
        
        <label for="justificaion">Justificaion</label>
        <input type="file" value="" name="justificacion"><br><br>
        
        <input type="submit" value="Guardar Registro">
    </form>
    </div>
    </center>
</body>
</html>