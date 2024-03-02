<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de la Escuela</title>
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

<header>
    <img src="/img/logo.png" alt="Logo de la Escuela" width="100%">
    <h1>BIENVENIDOS</h1>
    <h1>Sistema de preinscripción de la Escuela Secundaria Estatal #3011</h1>
</header>

<div class="container mt-4">
    <a href="consultar.php" class="btn btn-primary">
        <i class="bi bi-search"></i> Consultar Inscritos
    </a>

    <a href="agregar.php" class="btn btn-success">
        <i class="bi bi-person-plus"></i> Inscribir Alumno
    </a>
</div>

<section class="my-4">
    <p>La Secundaria Estatal 3011 Ma. Edmee Álvarez es una escuela de educación secundaria de la ciudad de Chihuahua.</p>
</section>

</body>
</html>
