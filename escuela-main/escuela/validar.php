<?php

include("db.php");

$EMAIL=$_POST['email'];
$PASSWORD=$_POST['password'];

$consulta = "SELECT * FROM login where correo_electronico = '$EMAIL' and contrasena = '$PASSWORD' ";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:indexAdmin.php");
}
else{
    include("login.html");
    ?>
    <h1>ERROR DE AUTENTICACIÓN</h1>
    <?php
} 
mysqli_free_result($resultado);
mysqli_close($conexion);

?>