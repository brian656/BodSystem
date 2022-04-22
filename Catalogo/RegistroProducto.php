<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    echo 'Usted no tiene autorización';
    die();
}

$conn = mysqli_connect("localhost", "root", "", "RelocaDB");
if (!$conn){
    die("Error de conexion: " . mysqli_connect_error());
}

//capturando datos
$v1 = $_POST['Nombre'];
$v2 = $_POST['Categoria'];
$v3 = $_POST['Precio'];
$v4 = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));

if(isset($_POST['Registrar'])){
    if(strlen($v1)>30 or strlen($v2)>30){
        echo "<p class='error'>* El nombre es muy largo</p>";
    } else{
        if(is_numeric($v2) or is_numeric($v1)){
            echo "<p class='error'>* El nombre no debe contener numeros</p>";
        }else{
            if(!is_numeric($v3)){
                echo "<p class='error'>* El costo no debe contener letras</p>";
            }else{
                    $sql = "INSERT INTO Productos (Nombre, Categoria, Precio, Foto)";
                    $sql .= "VALUES ('$v1','$v2','$v3','$v4')";
                    if (mysqli_query($conn, $sql)) {
                    echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>Datos del Perro</title>
                    <link rel='stylesheet' href='styles.css'><style>input{background-color: lightblue;}
                    body{background-image:url('https://previews.123rf.com/images/radenmas/radenmas1407/radenmas140700001/29867029-tienda-y-mercado-de-fondo-con-estanter%C3%ADa.jpg?fj=1');
                        background-repeat:no-repeat;background-attachment: fixed;background-position: center;}</style></head><body>";
                        echo "<hr><p>Datos ingresados correctamente</p>";
                        echo "<a href='Producto.php'>Volver</a><br>";
                        echo "<a href='Catalogo.html'>Ver productos</a><hr>";
                        echo "<footer><p><small> Autores: Arian Ticona Flores y Brandon Jesús Quispe Pacherre - <a href='Cerrar_Sesion.php'>Cerrar Sesión</a></small></p></footer></body></html>";
                    } else{
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                
            }
        }
    }
}

?>