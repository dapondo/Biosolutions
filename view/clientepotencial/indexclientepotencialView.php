<!--CrearCliente-->   
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <br>
        <div class="container well ">


            <form   class="row well" method="POST" action="<?php echo "index.php?controller=clientepotencial&action=crear"; ?>">
                <h1>Crear cliente</h1>

                <div class="col-xs-2"> <input class="form-control" id="input-nit-consultar" type="text" name="cp_nit" placeholder="Nit"></div>
                <div class="col-xs-2"><input class="form-control" id="input-nombre-consultar" type="text" name="cp_nombre" placeholder="Nombre"></div>
                <div class="col-xs-2"><input class="form-control" id="input-ciudad-consultar" type="text" name="cp_ciudad" placeholder="Ciudad"></div>
                <div class="col-xs-2"><input class="form-control" id="input-direccion-consultar" type="text" name="cp_direccion" placeholder="Dirección"></div>
                <div class="col-xs-2"><input class="form-control" id="input-telefono-consultar" type="text" name="cp_telefono" placeholder="Telefono"></div>
                <div class="col-xs-2"><input class="form-control" id="input-observaciones-consultar" type="textarea" name="cp_observaciones" placeholder="Observaciones"></div>
                <div class="col-xs-2"><br><input class="form-control btn-success" id="input-consultar" type="submit" name="enviar"  value="Crear"></div>
            </form>
            <section class="clientepotencial" id="client">
        </div>
        


    </body>
</html>
