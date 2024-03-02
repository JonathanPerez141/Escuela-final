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

    // Eliminar alumno de la base de datos
    $sql_delete = "DELETE FROM inscripcion WHERE id = $alumno_id";

    if ($conn->query($sql_delete) === TRUE) {
        echo "<p>Alumno eliminado correctamente</p>";
        // Redirigir a consultar.php
        header("Location: consultar.php");
        exit(); // Asegura que no se ejecuten más instrucciones después de la redirección
    } else {
        echo "<p>Error al eliminar alumno: " . $conn->error . "</p>";
    }
} else {
    echo "<p>ID de alumno no válido</p>";
}

// Cerrar la conexión
$conn->close();
?>
