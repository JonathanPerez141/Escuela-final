<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Tahoma';
            background-color: #f2f2f2;
            color: #333;
        }

        header {
            background-color: #162b4e;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: red;
        }

        h2, h3 {
            color: black;
            text-align: center;
        }

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: auto;
            text-align: left;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            color: #dc3545;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        a button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        a button:hover {
            background-color: #a00;
        }

        


    </style>

</head>
<body>

<header>
    <img src="img/logo.png" alt="Logo de la Escuela" width="100%">
    <h1>BIENVENIDOS</h1>
    <h1>Sistema de preinscripción de la Escuela Secundaria Estatal #3011</h1>
</header>

<div class="container mt-4">
    <section class="my-4">
        <h2>Formulario para Agregar Alumno</h2>

        <?php
        // Verificar si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

            // Insertar datos en la base de datos
            $sql = "INSERT INTO inscripcion (nombre, apPaterno, apMaterno, fechaNac, genero, direccion, telefono, correo, escuelaProcedencia, promedio, nombrePadre, nombreMadre, turno)
                    VALUES ('$nombre', '$apPaterno', '$apMaterno', '$fechaNac', '$genero', '$direccion', '$telefono', '$correo', '$escuelaProcedencia', '$promedio', '$nombrePadre', '$nombreMadre', '$turno')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Alumno agregado correctamente</p>";
            } else {
                echo "<p>Error al agregar alumno: " . $conn->error . "</p>";
            }

            // Cerrar la conexión
            $conn->close();
        }
        ?>

        <!-- Formulario de Agregar Alumno -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!-- Campos del formulario -->
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="apPaterno">Apellido Paterno:</label>
            <input type="text" id="apPaterno" name="apPaterno" required><br>

            <label for="apMaterno">Apellido Materno:</label>
            <input type="text" id="apMaterno" name="apMaterno" required><br>

            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input type="date" id="fechaNac" name="fechaNac" required><br>

            <label for="genero">Género:</label>
            <select id="genero" name="genero" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select><br>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required><br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" title="Ingrese un teléfono válido de 10 dígitos numéricos" required><br>
            <small>Ejemplo: 6144567890</small><br>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required><br>

            <label for="escuelaProcedencia">Escuela de Procedencia:</label>
            <input type="text" id="escuelaProcedencia" name="escuelaProcedencia" required><br>

            <label for="promedio">Promedio:</label>
            <input type="number" step="0.01" id="promedio" name="promedio" required><br>

            <label for="nombrePadre">Nombre del Padre:</label>
            <input type="text" id="nombrePadre" name="nombrePadre" required><br>

            <label for="nombreMadre">Nombre de la Madre:</label>
            <input type="text" id="nombreMadre" name="nombreMadre" required><br>

            <label for="turno">Turno:</label>
            <select id="turno" name="turno" required>
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
            </select><br>

            <div class="form-check">
             <input class="form-check-input" type="checkbox" id="aceptoTerminos" name="aceptoTerminos" required>
             <label class="form-check-label" for="aceptoTerminos">
                Acepto los <a href="Aviso de privacidad.pdf" target="_blank" >términos y condiciones</a>
            </label>
            </div>


            <!-- Botón de enviar el formulario -->
            <input type="submit" value="Agregar Alumno">
        </form>

        <a href='home.php'><button>Ir a inicio</button></a>
    </section>
</div>

</body>
</html>
