<!--Mostrar modificar eliminar cliente potencial-->
<html>
    <head>
        <title></title>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <br>
        <div class="container well col-xs-12 col-lg-10 col-lg-offset-1">
            <form id="formeditarclientepotencial" method="POST" action="<?php echo "index.php?controller=clientepotencial&action=index2"; ?>">


                <?php
                $clientepotencial = isset($clientepotencial->cp_nit) ? $clientepotencial->cp_nit : "";
                $clientepotencial = isset($clientepotencial->cp_nombre) ? $clientepotencial->cp_nombre : "";
                $clientepotencial = isset($clientepotencial->cp_ciudad) ? $clientepotencial->cp_ciudad : "";
                $clientepotencial = isset($clientepotencial->cp_direccion) ? $clientepotencial->cp_direccion : "";
                $clientepotencial = isset($clientepotencial->cp_observaciones) ? $clientepotencial->cp_observaciones : "";
                $clientepotencial = isset($clientepotencial->cp_telefono) ? $clientepotencial->cp_telefono : "";
                ?>

                <div class="col-xs-12 col-lg-6 col-lg-offset-1" ><input class="form-control" type="text" name="cpnit_consultar"  placeholder="Consultar"></div>
                <div><input  class="btn btn-success" type="submit" id="consultar" name="consultar" value="Consultar" ></div>
            </form>
        </div>
        <div class="container">

            <div class="well lead" style="">Registros</div>
            <div class="row well">

                <div class="col-xs-2"><strong>NIT</strong></div>
                <div class="col-xs-2"><strong>Nombre</strong></div>
                <div class="col-xs-2"><strong>Ciudad</strong></div>
                <div class="col-xs-2"><strong>Direccion</strong></div>
                <div class="col-xs-2"><strong>Telefono</strong></div>
                <div class="col-xs-2"><strong>Observaicion</strong></div>
            </div>
            <?php
            if ($valor == null) {
                if (isset($allusers)) {
                    foreach ($allusers as $clientepot) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                        ?> <div class="col-xs-2"> <?php echo $clientepot->cp_nit . " - "; ?> </div> <?php
                        ?> <div class="col-xs-2"> <?php echo $clientepot->cp_nombre . " - "; ?> </div> <?php
                        ?> <div class="col-xs-2"> <?php echo $clientepot->cp_ciudad . " - "; ?> </div> <?php
                        ?> <div class="col-xs-2"> <?php echo $clientepot->cp_direccion . " - "; ?> </div> <?php
                        ?> <div class="col-xs-2"> <?php echo $clientepot->cp_telefono . " - "; ?> </div> <?php
                        ?> <div class="col-xs-2"> <?php echo $clientepot->cp_observaciones . " - "; ?> </div> <?php
                        ?>
                        <div class="col-xs-2">
                            <a href = "<?php echo "index.php?controller=clientepotencial&action=borrar"; ?>&id=<?php echo $clientepot->cp_nit; ?>" class="btn btn-danger">eliminar</a>
                            <a href="index.php?controller=Clientepotencial&action=modificar&id=<?php echo $clientepot->cp_nit; ?>" class="btn btn-info">Modificar</a>
                        </div>
                        <br>
                        <hr/>
                        <?php
                    }
                    ?>
                    <?php
                }
            } else {
                ?> <div class="col-xs-2"> <?php echo $valor->cp_nit . " - "; ?> </div> <?php
                ?> <div class="col-xs-2"> <?php echo $valor->cp_nombre . " - "; ?> </div> <?php
                ?> <div class="col-xs-2"> <?php echo $valor->cp_ciudad . " - "; ?> </div> <?php
                ?> <div class="col-xs-2"> <?php echo $valor->cp_direccion . " - "; ?> </div> <?php
                ?> <div class="col-xs-2"> <?php echo $valor->cp_telefono . " - "; ?> </div> <?php
                ?> <div class="col-xs-2"> <?php echo $valor->cp_observaciones . " - "; ?> </div> <?php
                ?>
                <div class="col-xs-2">
                    <a href = "<?php echo "index.php?controller=clientepotencial&action=borrar"; ?>&id=<?php echo $clientepot->cp_nit; ?>" class="btn btn-danger">eliminar</a>
                    <a href="index.php?controller=Clientepotencial&action=modificar&id=<?php echo $clientepot->cp_nit; ?>" class="btn btn-info">Modificar</a>
                </div>
                <br>
                <hr/>
                <?php
            }
            ?>  


        </div>


    </body>
</html>


