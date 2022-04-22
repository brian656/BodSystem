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
        <title>BodSystem</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300&display=swap" rel="stylesheet">
        <!-- Load external CSS styles -->
        <link rel="stylesheet" href="../css/Custom.css">
        
        <link rel="stylesheet" href="Botones.css">
        <script>
            function redireccionar(){location.href="Catalogo.html";}
            function regresar(){location.href="../Inicio.html";}
        </script>
    </head>
<body>

    <form action="RegistroProducto.php" method="post" enctype="multipart/form-data">
        <!-- Formulario -->
        <h1 align="center">
            <i>BODSYSTEM</i></h1><hr>
            <img src="https://previews.123rf.com/images/phonlamaiphoto/phonlamaiphoto1706/phonlamaiphoto170600100/81554651-sistema-de-punto-de-venta-3d-para-la-gesti%C3%B3n-de-tiendas.jpg?fj=1"
             align="right" alt="abarrotes" width="500" height="333" border="3" style="border-radius: 30px;">
        <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2>
        <p><strong>Por favor ingresar los datos del producto</strong></p>
        <p><strong>Ingresar Nombre del Producto:</strong></p>
        <input name="Nombre" type="text" placeholder="ej. Frugo del Valle" required/>
        <p><strong>Seleccione su Categoría:</strong></p>
        <select class="form-select form-select-lg" id="Categoria" name="Categoria">
            <optgroup label="BEBIDAS">
                <option value="CERVEZAS">Cerveza</option>
                <option value="JUGOS">Jugos</option>
                <option value="OTRAS BEBIDAS">Otras Bebidas</option>
                <option value="AGUAS">Aguas</option>
                <option value="GASEOSAS">Gaseosas</option>
                <option value="CIGARROS">Cigarros</option>
                <option value="HIELO">Hielo</option>
                <option value="BEBIDAS ENERGETICAS">Bebidas Energéticas</option>
            </optgroup>
            <optgroup label="ABARROTES">
                <option value="SNACKS Y PIQUEOS">Snacks y Piqueos</option>
                <option value="ARROZ">Arroz</option>
                <option value="ACEITE">Aceite</option>
                <option value="AZUCAR Y ENDULZANTE">Azucar y Endulzante</option>
                <option value="MENESTRAS">Menestras</option>
                <option value="FIDEOS PASTAS Y SALSAS">Fideos, Pastas y Salsas</option>
                <option value="CONSERVAS">Conservas</option>
                <option value="SALSAS CREMAS Y CONDIMENTOS">Salsas, Cremas y Condimentos</option>
            </optgroup>
            <optgroup label="FRUTAS Y VERDURAS">
                <option value="FRUTAS">Frutas</option>
                <option value="VERDURAS">Verduras</option>
            </optgroup>
            <optgroup label="MASCOTAS">
                <option value="PERROS">Comida para Perros</option>
                <option value="GATOS">Comida para Gatos</option>
            </optgroup>
            <optgroup label="LIMPIEZA">
                <option value="ACCESORIOS">Accesorios de limpieza</option>
                <option value="BAÑO">Limpieza de baño</option>
            <optgroup label="CONGELADOS">
                <option value="HAMBURGUESAS">Hamburguesas</option>
                <option value="NUGGETS Y APANADOS">Nuggets y Apanados</option>
                <option value="HELADOS">Helados</option>
            </optgroup>
            <optgroup label="QUESOS Y FIAMBRES">
                <option value="QUESOS">Quesos</option>
                <option value="JAMONES">Jamones</option>
                <option value="SALAMES Y SALCHICHONES">Salames y Salchichones</option>
                <option value="EMBUTIDOS">Embutidos</option>
                <option value="TABLAS Y PIQUEOS">Tablas y Piqueos</option>
            </optgroup>
            <optgroup label="PANADERÍA Y PASTELERÍA">
                <option value="TORTILLAS Y MASAS">Tortillas y Masas</option>
                <option value="POSTRES">Postres</option>
                <option value="PANETONES">Panetones</option>
                <option value="PAN DE MOLDE">Pan de Molde</option>
            </optgroup>
            <optgroup label="CARNES">
                <option value="RES">Res</option>
                <option value="AVES">Aves</option>
                <option value="CERDO">Cerdo</option>
                <option value="PESCADOS Y MARISCOS">Pescados y Mariscos</option>
            </optgroup>
            <optgroup label="LACTEOS Y HUEVOS">
                <option value="HUEVOS">Huevos</option>
                <option value="LECHE">Leche</option>
                <option value="MANTEQUILLA Y MARGARINA">Mantequilla y Margarina</option>
                <option value="YOGURT">Yogurt</option>
            </optgroup>
            <optgroup label="DESAYUNOS">
                <option value="CEREALES">Cereales</option>
                <option value="CAFE E INFUSIONES">Cafe e Infusiones</option>
                <option value="MERMELADAS MIELES Y DULCES">Mermeladas, Mieles y Dulces</option>
            </optgroup>
        </select><br>
        <p><strong>Ingrese el Precio del producto:</strong></p>
        <input name="Precio" type="number" required/>
        <p><strong>Imagen del Producto</strong></p>
        <input name="Foto" type="file"/><br>
        
        <center><input type="submit" value="REGISTRAR" name="Registrar" class="btn fourth"></center>
        <center><input type="reset" value="CANCELAR" class="btn fourth"></center>
        <center><input type="button" value="CATALOGO" onclick="redireccionar()" class="btn fourth"></center>
        <center><input type="button" value="REGRESAR" onclick="regresar()" class="btn fourth"></center><hr>
        <center><a href="CerrarSesion.php">Cerrar Sesión</a></center>
    </form>
    <footer>
        <p><small> Autores: Arian Ticona Flores y Brandon Jesús Quispe Pacherre</small></p>
        <p><small><a href="https://sistemas.unmsm.edu.pe/site/index.php" target="blank"> Universidad Nacional Mayor de San Marcos - Facultad de Ingenieria de Sistemas</a></small></p>
    </footer>
</body>
</html>