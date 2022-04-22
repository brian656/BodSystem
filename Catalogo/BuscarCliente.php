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
            function redireccionar(){location.href="Cliente.php";}
        </script>
    </head>

    <body>
        <form action="Deudas.php" method="post">
            <h1 align="center"><i>Modulo de Consulta</i></h1><hr>
                <img src="../Imagenes/abarrotes.jpg" align="center" alt="abarrotes" width="450" height="233" border="3" style="border-radius: 30px;">
            <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2>
            <p><strong>Ingresar Nombre a consultar:</strong></p>
            <input type = "text" name = "Nombre" placeholder="ej. Marcos" required><br>
            <center><input type = "submit" name="buscar" value = "BUSCAR" class="btn fourth"></center>
            <center><input type="reset" value="CANCELAR" class="btn fourth"></center>
            <center><input type="button" onclick="redireccionar()" value="REGRESAR" class="btn fourth"></center><hr>
        </form>
        <footer>
        <p><small> Autores: Arian Ticona Flores y Brandon Jesús Quispe Pacherre</small></p>
        <p><small><a href="https://sistemas.unmsm.edu.pe/site/index.php" target="blank"> Universidad Nacional Mayor de San Marcos - Facultad de Ingenieria de Sistemas</a></small></p>
        </footer>
    </body>
</html>