<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Inscripciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #e6f7ff;
        }

        .container {
            background-color: #ffffff;
            margin-top: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .mt-4 {
            margin-top: 1.5rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .table {
            background-color: #cce5ff;
        }

        .btn-editar {
            background-color: #4d94ff;
            border-color: #4d94ff;
        }

        .btn-eliminar {
            background-color: red;
            border-color: red;
        }

        .btn-volver {
            background-color: #007bff;
            border-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mt-4">Consulta de Inscripciones</h2>

    <?php
    // Establecer la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "escuela";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consultar los registros de la base de datos
    $sql = "SELECT * FROM inscripcion";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los datos en una tabla
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Fecha de Nacimiento</th>
                <th>Género</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Escuela Procedencia</th>
                <th>Promedio</th>
                <th>Nombre del Padre</th>
                <th>Nombre de la Madre</th>
                <th>Turno</th>
                <th>Acciones</th>
            </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["apPaterno"]."</td>
                <td>".$row["apMaterno"]."</td>
                <td>".$row["fechaNac"]."</td>
                <td>".$row["genero"]."</td>
                <td>".$row["direccion"]."</td>
                <td>".$row["telefono"]."</td>
                <td>".$row["correo"]."</td>
                <td>".$row["escuelaProcedencia"]."</td>
                <td>".$row["promedio"]."</td>
                <td>".$row["nombrePadre"]."</td>
                <td>".$row["nombreMadre"]."</td>
                <td>".$row["turno"]."</td>
                <td>
                    <a href='editar.php?id=".$row["id"]."'><button class='btn btn-editar'>Editar</button></a>
                    <a href='eliminar.php?id=".$row["id"]."'><button class='btn btn-eliminar'>Eliminar</button></a>
                </td>
            </tr>";
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo "0 resultados encontrados";
    }

    echo "<br><a href='indexAdmin.php'><button class='btn btn-volver'>Volver</button></a>";
    // Cerrar la conexión
    $conn->close();
    ?>

</div>

</body>
</html>