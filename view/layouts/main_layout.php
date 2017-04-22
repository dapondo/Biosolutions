<?php 
if (isset($_SESSION['datosvector']) && $_SESSION['datosvector']){
?>
<html>    
    <head>
        <meta charset="utf-8">
        <title> Menus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/menucss.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/hola.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--Font Awesome para insertar iconos desde internet -->
        <script src="https://use.fontawesome.com/033bcd6d1a.js"></script>
    <noscript><h1>Debes activar el uso de JavaScript para que puedas ver todo el contenido</h1></noscript> 
</head>
<body>
    <div class="container">
        <img class="col-xs-5 col-md-2" src="images/segescot.png" alt=""/>
        <h1 id="bienvenida" class="text-success"><?php echo 'Bienvenido  ' . $_SESSION['nombre']; ?></h1> 
    </div>
    <br> 
    <!--El segundo div que contiene el menú principal-->
    <div class="container">
        <div class="row">
            <div class="divcontorno col-xs-12 col-lg-1 ">
                <button type="button" class="btn btn-info dropdown-toggle panel-body  text-center col-xs-12 col-lg-12" data-toggle="dropdown">
                    Cliente <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?controller=Cliente&action=crearcliente">Crear</a></li>
                    <li><a href="index.php?controller=Cliente&action=consultarcliente">Modificar Y Consultar</a></li>
                </ul>
            </div>

            <div class="divcontorno col-xs-12 col-lg-2" >
                <button type="button" class="btn btn-info dropdown-toggle panel-body  text-center col-xs-12 col-lg-12" data-toggle="dropdown">
                    Despacho <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?controller=Despacho&action=indexcrear">Crear</a></li>
                    <li><a href="index.php?controller=Despacho&action=modificarbd">Modificar</a></li>
                    <li><a href="#">Buscar</a></li>
                </ul>
            </div> 

            <div class="divcontorno col-xs-12 col-lg-2" >
                <button type="button" class="btn btn-info dropdown-toggle panel-body  text-center col-xs-12 col-lg-12" data-toggle="dropdown">
                    Cotizaciones <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?controller=Cotizacion&action=index">Crear</a></li>
                    <li><a href="#">Modificar</a></li>
                    <li><a href="#">Buscar</a></li>
                </ul>
            </div> 
            <div class="divcontorno col-xs-12 col-lg-2" >
                <button class="btn btn-info dropdown-toggle panel-body text-center col-xs-12 col-lg-12" data-toggle="dropdown">
                    Cliente potencial <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?controller=clientepotencial&action=index">Crear</a></li>
                    <li><a href="index.php?controller=clientepotencial&action=index2">Mostrar todo</a></li>
                </ul>
            </div> 
            <div class="divcontorno col-xs-12 col-lg-2" >
                <button type="button" class="btn btn-info dropdown-toggle panel-body text-center col-xs-12 col-lg-12" data-toggle="dropdown">
                    Producto <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Modificar</a></li>
                    <li><a href="#">Buscar</a></li>
                </ul>
            </div> 
            <div class="divcontorno col-xs-12 col-lg-2" >
                <button type="button" class="btn btn-info dropdown-toggle panel-body text-center col-xs-12 col-lg-12" data-toggle="dropdown">
                    Proveedor <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?controller=Proveedor&action=index">Crear</a></li>
                    <li><a href="index.php?controller=Proveedor&action=modificarbd">Modificar</a></li>
                    <li><a href="#">Buscar</a></li>
                </ul>
            </div> 
            <div class="divcontorno col-xs-12 col-lg-1" >
                <button type="button" class="btn btn-info dropdown-toggle panel-body  text-center col-xs-12 col-lg-12" data-toggle="dropdown">
                    Contacto <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?controller=Contacto&action=index">Crear</a></li>
                    <li><a href="#">Modificar</a></li>
                    <li><a href="#">Buscar</a></li>
                </ul>
            </div> 
        </div>
    </div> 


    <!--menu desplegable Horizonal-->

    <div id="vertical" class="container">
        <br>
        <ul id="navigation">
            <li class="servicioalcliente"><a id="Servicioalcliente" href="" title="Servicio al cliente"><span>Servicio al cliente  <i class="fa fa-users" style="font-size:1px;"></i></span></a></li>
            <li class="usuario"><a href="" title="Administrar Usuario"><span>Administrar Usuario  <i class="fa fa-user-circle-o"></i></span></a></li>
            <li class="cerrarsesion"><a id="movercerrar" href="index.php?controller=Login&action=logout" title="Contact"><span>Cerrar Sesión <i class="fa fa-sign-out"></i></span></a></li>
        </ul>
    </div>
    
    <?php
    require_once 'view/' . $vista . 'View.php';
    ?>      
      
</head>  
</body> 
</html>
<?php
}
else{
    echo 'Sesión expirada';
}
?>
