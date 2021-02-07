<?php
$servidor="sql7.freemysqlhosting.net";
$user="sql7390835";
$password="lDTffr2xsY";
$db="sql7390835";

$conexion= new mysqli($servidor, $user, $password, $db);

if($conexion->connect_error){
die("CONEXION FALLIDA " . $conexion->connect_error);
}

if(isset($_POST['nombre']) and isset($_POST['apellidos']) and isset($_POST['email']) and isset($_POST['calidad'])){
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$calidad = $_POST['calidad'];

$sql="INSERT INTO recibir_periodico (nombre, apellidos, email, calidad) VALUES ('$nombre', '$apellidos', '$email', '$calidad')";

if($conexion->query($sql)==true){
    echo "<script type='text/javascript'>";
    echo "window.history.back(-1)";
    echo "</script>"; 
}
}
?>