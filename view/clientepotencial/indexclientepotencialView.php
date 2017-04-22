<!--CrearCliente-->   
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <br>
        <div class="container well ">


            <form   class="row" method="POST" action="<?php echo "index.php?controller=clientepotencial&action=crear"; ?>">
                <div class=" well "> <h1>Crear cliente potencial</h1>  </div>

                <div class="col-xs-2"> <input class="form-control" id="input-nit-consultar" type="text" name="cp_nit" placeholder="Nit"></div>
                <div class="col-xs-2"><input class="form-control" id="input-nombre-consultar" type="text" name="cp_nombre" placeholder="Nombre"></div>
                <div class="col-xs-2"><input class="form-control" id="input-ciudad-consultar" type="text" name="cp_ciudad" placeholder="Ciudad"></div>
                <div class="col-xs-2"><input class="form-control" id="input-direccion-consultar" type="text" name="cp_direccion" placeholder="Dirección"></div>
                <div class="col-xs-2"><input class="form-control" id="input-telefono-consultar" type="text" name="cp_telefono" placeholder="Telefono"></div>
                <div class="col-xs-10"><br><textarea class="form-control" id="input-observaciones-consultar" cols="50" rows="50" type="textarea" name="cp_observaciones" placeholder="Observaciones"></textarea></div>
                <div class="col-xs-3"><br><input class="form-control btn-success" id="input-consultar" type="submit" name="enviar"  value="Crear"></div>
            </form>
            <section class="clientepotencial" id="client">
        </div>
        


    </body>
</html>
