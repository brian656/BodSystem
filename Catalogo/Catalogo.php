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
$v2 = $_REQUEST['lista1'];

if(isset($_POST['buscar'])){
        
            $sql = "select * from Productos where Categoria like '".$v2."'";
            $result = mysqli_query($conn, $sql);
            //cuantos resultados hay en la busqueda
            $num_resultados = mysqli_num_rows($result);
            echo "<h1 style='background-color:chocolate;font-family:Verdana;border-style: dashed;' align='center'>
            Resultados encontrados: ".$num_resultados."</h1><hr>";

            for ($i=0; $i<$num_resultados; $i++){
                $row = mysqli_fetch_array($result);
                $imagen = base64_encode($row['Foto']);
                echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>Datos del Perro</title>
                <link rel='stylesheet' href='styles.css'><style>input{background-color: aquamarine;}
                body{background-image:url('https://previews.123rf.com/images/radenmas/radenmas1407/radenmas140700001/29867029-tienda-y-mercado-de-fondo-con-estanter%C3%ADa.jpg?fj=1');
                background-repeat:no-repeat;background-attachment: fixed;background-position: center;}</style></head><body>";
                echo " </br>PRODUCTO ";echo ($i+1);echo": </br>";
                echo " </br>Nombre : ".$row["Nombre"];
                echo " </br>Precio : ".$row["Precio"];echo" soles";
                echo " </br>Imagen del Producto : ";
                echo " </br><img width='300' height='300' src='data:image/jpg;charset=utf8;base64,".$imagen."'/;<br/>";
            }
            
            if($num_resultados == 0){echo "<p class='error'>* No existe el producto</p>";}
            echo "<p></p><hr> <a href='Catalogo.html'>Volver</a><hr>";
            echo "<footer><p><small> Autores: Arian Ticona Flores y Brandon Jesús Quispe Pacherre - <a href='CerrarSesion.php'>Cerrar Sesión</a></p></footer></body></html>";

}
?>