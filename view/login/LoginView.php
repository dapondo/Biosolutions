<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title> inicio de sesion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <div class="container">
            <form method="POST" action="<?php echo "index.php?controller=Login&action=login"; ?>">
            <div class="col-xs-12 col-md-4 col-md-offset-4 well form-group" id="principal">
                <div class="row">
                    <div class="alert alert-danger">Usuario o contraseña incorrectos</div>
                    <div class="alert alert-success">Ha ingresado correctamente</div>
                </div>
                <div class="row well">
                    <div class="col-xs-12">
                        <label>Nombre de usuario:</label>
                        <input class="form-control" name="usu_email">
                    </div>
                </div>
                <br>
                <div class="row well">
                    <div class="col-xs-12">
                        <label>Contraseña:</label>
                        <input class="form-control" name="usu_password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-block" id="btn-Login" type="submit">Ingresar <i class="glyphicon glyphicon-user" ></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="btn btn-link btn-block">Olvidé mi contraseña
                            <i class="glyphicon glyphicon-question-sign"></i></a>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-xs-12">
                        <a class="btn btn-link btn-block" href="index.php?controller=Login&action=registrarUsuario">Registrarse
                            <i class="fa fa-user-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
                </form>
            <div class="col-lg-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>


                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
