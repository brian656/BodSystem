<?php
$usuario=$_POST['Usuario'];
$clave=$_POST['Clave'];
session_start();

$claveMD5 = md5($clave);

$conexion=mysqli_connect("localhost", "root", "", "RelocaDB");
if (!$conexion){
    die("Error de conexion: " . mysqli_connect_error());
}
$consulta="SELECT * FROM Usuario WHERE usuario='$usuario' AND clave='$claveMD5'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("Location: Inicio.html");
}else{
    echo "Error en la autentificación";
}
$_SESSION['usuario'] = $usuario;
mysqli_free_result($resultado);
mysqli_close($conexion);
?>