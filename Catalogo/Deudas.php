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
$v2 = $_REQUEST['Nombre'];

if(isset($_POST['buscar'])){
    if(strlen($v2) > 15){
        echo "<p class='error'>* El nombre es muy largo</p>";
    }else{
        if(is_numeric($v2)){
            echo "<p class='error'>* El nombre no debe contener numeros</p>";
        }else{
            $sql = "select * from Clientes where Nombre like '".$v2."'";
            $result = mysqli_query($conn, $sql);
            //cuantos resultados hay en la busqueda
            $num_resultados = mysqli_num_rows($result);
            echo "<h1 style='background-color:chocolate;font-family:Verdana;border-style: dashed;' align='center'>
            Resultados encontrados: ".$num_resultados."</h1><hr>";

            for ($i=0; $i<$num_resultados; $i++){
                $row = mysqli_fetch_array($result);
                echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title>Datos del Cliente</title>
                <link rel='stylesheet' href='styles.css'><link rel='stylesheet' href='Botones.css'><style>
                body{background-image:url('https://previews.123rf.com/images/radenmas/radenmas1407/radenmas140700001/29867029-tienda-y-mercado-de-fondo-con-estanter%C3%ADa.jpg?fj=1');
                background-repeat:no-repeat;background-attachment: fixed;background-position: center;}</style>
                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
                <script>function actualizar(){
                    $('#actualizar').click(function(){
                        $('#pago').text('Pago su deuda : SI');
                    });
                }</script></head><body>";
                echo " </br>Datos de la deuda ";echo ($i+1);echo": </br>";
                echo " </br>Nombre del cliente : ".$row["Nombre"];
                echo " </br>Productos que compro : ".$row["Productos"];
                echo " </br>Costo de la compra : ".$row["Deuda"];
                if($row["Pago"]==0){
                    echo " </br><p id='pago'>Pago su deuda : NO</p>";
                    echo "<center><input type='button' id='actualizar' value='CAMBIAR' onclick='actualizar()' class='btn fourth'></center><hr>";
                }else{
                    echo "</br>Pago su deuda : SI";
                }
                $deuda = $deuda + $row["Deuda"];
            }
            
            if($num_resultados == 0){echo "<p class='error'>* No existe el cliente</p>";}else{
                echo "</br>DEUDA TOTAL: ".$deuda;
            }
            echo "<p></p><hr> <a href='BuscarCliente.php'>Volver</a><hr>";
            echo "<footer><p><small> Autores: Arian Ticona Flores y Brandon Jesús Quispe Pacherre - <a href='CerrarSesion.php'>Cerrar Sesión</a></p></footer></body></html>";
        }
    }
}
?>