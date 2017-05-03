<!DOCTYPE html>
<html>
    <head>
        <title>Cotizacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body><br>
        <div class="container well col-xs-12 col-md-4  col-md-offset-4">
            <div class="well col-xs-12 col-md-12"><h3>Crear cotización</h3></div>
            <form  class="well col-xs-12 col-md-12"   method="POST" action="<?php echo "index.php?controller=Cotizacion&action=crear"; ?>">
                <div class="form-group"><p>Codigo de Cotizacion</p></div>
                <div><input type="text" class="form-control"   name="cot_codigoCotizacion"></div>
                <div class="form-group"><p>Cliente</p></div>
                <div><input type="text" class="form-control" name="con_codigo"></div>
                <div class="form-group"><p>validez</p></div>
                <div><input type="text" class="form-control" name="cot_validez"></div>
                <div class="form-group"><p>Tiempo de Entrega</p></div>
                <div><input type="text" class="form-control" name="cot_tiempoEntrega"></div>
                <div class="form-group"><p>Lugar de entrega</p></div>
                <div><input type="text" class="form-control" name="cot_lugarEntrega"></div>
                <div class="form-group"><p>Forma de pago</p></div>
                <div><input type="text" class="form-control" name="cot_formaPago"></div>
                <div class="form-group"><p>Fecha de vencimiento de cotizacion</p></div>
                <div><input type="date" class="form-control" name="cot_fechaCotizacion"></div>
                <br>
                <br>
                <input class="btn btn-success form-control" type="submit">
            </form>
        </div>
    </body>
</html>

