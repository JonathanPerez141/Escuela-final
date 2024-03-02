<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Editar Alumno</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    <style>
        body {
            font-family: 'Tahoma';
            background-color: #f2f2f2;
            color: #333;
            padding: 20px;
        }

        h2 {
            color: #007bff;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        select, input {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type='submit'] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type='submit']:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

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

// Verificar si se ha enviado un ID válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $alumno_id = $_GET['id'];

    // Obtener los datos del alumno a editar
    $sql = "SELECT * FROM inscripcion WHERE id = $alumno_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $alumno = $result->fetch_assoc();

        // Si se ha enviado el formulario de edición
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener datos del formulario
            $nombre = $_POST["nombre"];
            $apPaterno = $_POST["apPaterno"];
            $apMaterno = $_POST["apMaterno"];
            $fechaNac = $_POST["fechaNac"];
            $genero = $_POST["genero"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $correo = $_POST["correo"];
            $escuelaProcedencia = $_POST["escuelaProcedencia"];
            $promedio = $_POST["promedio"];
            $nombrePadre = $_POST["nombrePadre"];
            $nombreMadre = $_POST["nombreMadre"];
            $turno = $_POST["turno"];

            // Actualizar datos en la base de datos
            $sql_update = "UPDATE inscripcion 
                           SET nombre = '$nombre', apPaterno = '$apPaterno', apMaterno = '$apMaterno', fechaNac = '$fechaNac', 
                               genero = '$genero', direccion = '$direccion', telefono = '$telefono', correo = '$correo', 
                               escuelaProcedencia = '$escuelaProcedencia', promedio = '$promedio', nombrePadre = '$nombrePadre', 
                               nombreMadre = '$nombreMadre', turno = '$turno' 
                           WHERE id = $alumno_id";

            if ($conn->query($sql_update) === TRUE) {
                echo "<p>Alumno actualizado correctamente</p>";
                // Redirigir a consultar.php
                header("Location: consultar.php");
                exit(); // Asegura que no se ejecuten más instrucciones después de la redirección
            } else {
                echo "<p>Error al actualizar alumno: " . $conn->error . "</p>";
            }
        }

        // Formulario de edición
        echo "<div class='container mt-4'>
            <h2 class='text-center'>Editar Alumno</h2>

            <form action='editar.php?id=$alumno_id' method='post'>
                <!-- Campos del formulario con valores actuales del alumno -->
                <label for='nombre'>Nombre:</label>
                <input type='text' id='nombre' name='nombre' value='{$alumno["nombre"]}' required>

                <label for='apPaterno'>Apellido Paterno:</label>
                <input type='text' id='apPaterno' name='apPaterno' value='{$alumno["apPaterno"]}' required>

                <label for='apMaterno'>Apellido Materno:</label>
                <input type='text' id='apMaterno' name='apMaterno' value='{$alumno["apMaterno"]}' required>

                <label for='fechaNac'>Fecha de Nacimiento:</label>
                <input type='date' id='fechaNac' name='fechaNac' value='{$alumno["fechaNac"]}' required>

                <label for='genero'>Género:</label>
                <select id='genero' name='genero' required>
                    <option value='Masculino'".($alumno["genero"]=="Masculino" ? " selected":"").">Masculino</option>
                    <option value='Femenino'".($alumno["genero"]=="Femenino" ? " selected":"").">Femenino</option>
                    <option value='Otro'".($alumno["genero"]=="Otro" ? " selected":"").">Otro</option>
                </select>

                <label for='direccion'>Dirección:</label>
                <input type='text' id='direccion' name='direccion' value='{$alumno["direccion"]}' required>

                <label for='telefono'>Teléfono:</label>
                <input type='tel' id='telefono' name='telefono' value='{$alumno["telefono"]}' required>

                <label for='correo'>Correo:</label>
                <input type='email' id='correo' name='correo' value='{$alumno["correo"]}' required>

                <label for='escuelaProcedencia'>Escuela Procedencia:</label>
                <input type='text' id='escuelaProcedencia' name='escuelaProcedencia' value='{$alumno["escuelaProcedencia"]}' required>

                <label for='promedio'>Promedio:</label>
                <input type='number' step='0.01' id='promedio' name='promedio' value='{$alumno["promedio"]}' required>

                <label for='nombrePadre'>Nombre del Padre:</label>
                <input type='text' id='nombrePadre' name='nombrePadre' value='{$alumno["nombrePadre"]}' required>

                <label for='nombreMadre'>Nombre de la Madre:</label>
                <input type='text' id='nombreMadre' name='nombreMadre' value='{$alumno["nombreMadre"]}' required>

                <label for='turno'>Turno:</label>
                <select id='turno' name='turno' required>
                    <option value='Matutino'".($alumno["turno"]=="Matutino" ? " selected":"").">Matutino</option>
                    <option value='Vespertino'".($alumno["turno"]=="Vespertino" ? " selected":"").">Vespertino</option>
                </select>

                <!-- Botón de enviar el formulario -->
                <input type='submit' class='btn btn-primary' value='Guardar Cambios'>
            </form>
        </div>";
    } else {
        echo "<p>Alumno no encontrado</p>";
    }
} else {
    echo "<p>ID de alumno no válido</p>";
}

// Cerrar la conexión
$conn->close();
?>

</body>
</html>
