<?php
// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos (modifica las credenciales según tu configuración)
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
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash de la contraseña

    // Insertar datos en la base de datos
    $sql = "INSERT INTO login (correo_electronico, contrasena) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("location:indexAdmin.php");
    } else {
        echo "<p>Error al registrar usuario: " . $conn->error . "</p>";
    }

    // Cerrar la conexión
    $conn->close();
}

?>