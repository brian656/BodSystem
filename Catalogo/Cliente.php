<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
    echo 'Usted no tiene autorización';
    die();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bod System</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300&display=swap" rel="stylesheet">
        <!-- Load external CSS styles -->
        <link rel="stylesheet" href="./css/Custom.css">
        
        <link rel="stylesheet" href="Botones.css">
        <script>
            function redireccionar(){location.href="BuscarCliente.php";}
            function regresar(){location.href="../Inicio.html";}
        </script>
    </head>
<body>

    <form action="RegistroCliente.php" method="post" enctype="multipart/form-data">
        <!-- Formulario -->
        <h1 align="center">
            <i>BODSYSTEM</i></h1><hr>
            <img src="https://previews.123rf.com/images/phonlamaiphoto/phonlamaiphoto1706/phonlamaiphoto170600100/81554651-sistema-de-punto-de-venta-3d-para-la-gesti%C3%B3n-de-tiendas.jpg?fj=1"
             align="right" alt="abarrotes" width="500" height="333" border="3" style="border-radius: 30px;">
        <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2>
        <p><strong>Por favor ingresar los datos de la Deuda:</strong></p>
        <p><strong>Ingresar Nombre del Cliente:</strong></p>
        <input name="Nombre" type="text" placeholder="ej. Mateo" required/>
        <p><strong>Ingresar los productos que compro:</strong></p>
        <input name="Productos" type="text" placeholder="ej. 1 kilo de huevos y un Yogurt Gloria" required/>
        <p><strong>Ingresar su deuda:</strong></p>
        <input name="Deuda" type="number" placeholder="ej. 30" required/>

        
        <center><input type="submit" value="REGISTRAR" name="Registrar" class="btn fourth"></center>
        <center><input type="reset" value="CANCELAR" class="btn fourth"></center>
        <center><input type="button" value="BUSCAR" onclick="redireccionar()" class="btn fourth"></center>
        <center><input type="button" value="REGRESAR" onclick="regresar()" class="btn fourth"></center><hr><hr>
        <center><a href="CerrarSesion.php">Cerrar Sesión</a></center>
    </form>
    <footer>
        <p><small> Autores: Arian Ticona Flores y Brandon Jesús Quispe Pacherre</small></p>
        <p><small><a href="https://sistemas.unmsm.edu.pe/site/index.php" target="blank"> Universidad Nacional Mayor de San Marcos - Facultad de Ingenieria de Sistemas</a></small></p>
    </footer>
</body>
</html>