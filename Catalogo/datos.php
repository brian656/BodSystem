<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    echo 'Usted no tiene autorización';
    die();
}

$conexion=mysqli_connect("localhost", "root", "", "RelocaDB");
if (!$conn){
    die("Error de conexion: " . mysqli_connect_error());
}
$continente=$_POST['actualizar'];

	$sql="SELECT ID,
			 Nombre,
			 Productos,
             Deuda,
             Pago 
		from Clientes where id_continente='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>SELECT 2 (paises)</label> 
			<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";

?>