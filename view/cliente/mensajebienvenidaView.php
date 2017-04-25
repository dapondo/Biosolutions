<html>    
    <head>
        <meta charset="utf-8">
        <title> Menus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/menucss.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--Font Awesome para insertar iconos desde internet -->
        <script src="https://use.fontawesome.com/033bcd6d1a.js"></script>
    <noscript><h1>Debes activar el uso de JavaScript para que puedas ver todo el contenido</h1></noscript> 
</head>
<body>
    <div class="container col-xs-12 col-lg-12">
        <br>
        <div><a>Politicas de privacidad</a></div>
        <div class="col-xs-5 col-lg-5 col-lg-offset-5" style="margin-top:150px;"><img src="images/segescot.png" alt=""/></div>
        <br>
        <div class="text-center well col-xs-6 col-lg-6 col-lg-offset-3">
            <?php
            echo "<h1>" . "Bienvenido" . "  " . $_SESSION['nombre'];
            "</h1>"
            ?>
        </div>
                <div class="col-xs-12  col-lg-12 ">
        <div class="col-lg-4 col-lg-offset-5"><input type="checkbox">Acepto politicas de privacidad</div>
        <br>
        <div class="col-lg-4 col-lg-offset-5"><a href="index.php?controller=Cliente&action=crearcliente" class="btn btn-success btn-lg active" role="button">Continuar</a></div>    
        </div>
        

    </div>
</body> 
</html>
