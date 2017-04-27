<html>    
    <head>
        <meta charset="utf-8">
        <title> Menus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <noscript><h1>Debes activar el uso de JavaScript para que puedas ver todo el contenido</h1></noscript> 
</head>
<body>
    <div class="container col-xs-12 col-lg-8 well col-lg-offset-2" style="background-color: white; border: white">
        <form method="POST" action="<?php echo "index.php?controller=Login&action=index3"; ?>">
            <br>
            <div><a>Politicas de privacidad</a></div>
            <img src="images/segescot.png"  class=" col-xs-6 col-xs-offset-3 col-lg-4 col-lg-offset-4"/>
            <br>
            <br>
            <div class="text-center well col-xs-12 col-lg-12" style="margin-top: 50px;">
                <?php
                echo "<h1>" . "Bienvenido" . "  " . $_SESSION['nombre'];
                "</h1>"
                ?>

            </div>
            <div class="col-xs-8 col-xs-offset-3 col-lg-4 col-lg-offset-4 text-center"><input name="check" id="checkPrivacidad" type="checkbox">Acepto politicas de privacidad</div>
                <div class=" col-xs-4 col-xs-offset-4 col-lg-4 col-lg-offset-4" style="margin-top: 20px"><button class="btn btn-block" type="button" id="btnContinuarPrivacidad">Continuar</button></a></div>    
            

        </form>
    </div>
</body> 
</html>
