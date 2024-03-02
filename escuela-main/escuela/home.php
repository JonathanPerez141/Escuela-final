<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de la Escuela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
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
        }

        h1 {
            color: red;
        }

        h2, h3 {
            color: black;
        }

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        ul.list-group {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        a {
            color: #dc3545;
        }

        a:hover {
            color: #a00;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <header class="text-center">
        <img src="img/logo.png" alt="Logo de la Escuela" class="img-fluid" width="100%">
        <h1 class="mt-3">BIENVENIDOS</h1>
        <a href="login.html" class="btn btn-primary"><i class="fa fa-user"></i> Iniciar Sesión</a>
        
    </header>

    <section class="my-4">
        <h3 class="text-center">La Secundaria Estatal 3011 Ma. Edmee Álvarez es una escuela de educación secundaria de turno matutino en la ciudad de Chihuahua, con una población estudiantil de más de 500 alumnos.</h3>
    </section>

    <section class="my-4">
        <h2 class="text-center">Datos de la Institución</h2>
        <ul class="list-group">
            <li class="list-group-item">Clave de la escuela: 08EES0147A</li>
            <li class="list-group-item">Dirección: Calle 42 #815, Col. Inalámbrica</li>
            <li class="list-group-item">Teléfono: (614)587-61-50</li>
            <li class="list-group-item">Correo: secundaria3011@gmail.com</li>
            <li class="list-group-item">Turno: Matutino</li>
            <li class="list-group-item">Estado: Chihuahua</li>
            <li class="list-group-item">Tipo de escuela: General</li>
        </ul>
    </section>

    <section class="my-4 text-center">
        <h2>Preinscripciones del 01 al 15 de febrero</h2>
        <a href="agregar.php" class="btn btn-primary">
            <i class="bi bi-search"></i> Registrar alumno
        </a>
    </section>

    <div class="text-center">
        <a href="Aviso de privacidad.pdf" class="text-decoration-none">Consulte nuestro aviso de privacidad</a>
    </div>
</div>

</body>
</html>
