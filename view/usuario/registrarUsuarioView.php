<html>
    <head>
        <title>Registrar</title>
    </head>
    <body>
         
        <div class="container well col-xs-12 col-md-4  col-md-offset-4" style="background-image:url(images/inicio.jpg) ">
            <div class="well col-xs-12 col-md-12"><h3>Regístrese</h3></div>
            <form class="well" method="POST" action="<?php echo "index.php?controller=Usuario&action=registrarUsuario"; ?>">
                <div>Documento</div>
                <div class="form-group"><input class="form-control" name="usu_documento" ></div>
                <div>Nombre</div>
                <div class="form-group"><input class="form-control" name="usu_nombre"></div>
                <div>Fecha de Nacimiento</div>
                <div class="form-group"><input type="date" class="form-control" name="usu_fechaNacimiento"></div>
                <div>Password</div>
                <div class="form-group"><input class="form-control" name="usu_password"></div>
                <div>Telefono</div>
                <div class="form-group"><input class="form-control" name="usu_telefono"></div>
                <div>Nombre de usuario</div>
                <div class="form-group"><input class="form-control" name="usu_nombreUsuario"></div>
                <div>Dirección</div>
                <div class="form-group"><input class="form-control" name="usu_direccion"></div>
                <div>Email</div>
                <div class="form-group"><input class="form-control" name="usu_email"></div>
                <div><br><input class="form-control btn-success" type="submit"> </div>
            </form>
        </div>
        <div class="container  col-xs-12 col-md-4">
        <a href="http://localhost/biosolutions-version3/index.php?controller=Login&action=login"><img style="width:40px; height: 40px; margin-left:90% " src="images/volver.jpg" alt=""/></a>
        </div>
        
        
    </body>
</html>
