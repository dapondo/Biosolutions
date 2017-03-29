<!DOCTYPE html>
<html>
    <head>
        <title>Tabla cotizacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form id="crearproducto" method="POST" action="<?php echo "index.php?controller=Cotizacion&action=index"; ?>">
                <p>Codigo de Cotizacion</p>
                <input type="text" id="cot_codigoCotizacion"  name="cot_codigoCotizacion">
                <p>validez</p>
                <input type="text" id="cot_validez"  name="cot_validez">
                <p>Tiempo de Entrega</p>
                <input type="text" id="cot_tiempoEntrega"  name="cot_tiempoEntrega">
                <p>Lugar de entrega</p>
                <input type="text" id="cot_lugarEntrega"  name="cot_lugarEntrega">
                <p>Forma de pago</p>
                <input type="text" id="cot_fechaCotizacion"  name="cot_formaPago">
                <p>Fecha de vencimiento</p>
                <input type="date" id="prd_fechaVencimiento"  name="prd_fechaVencimiento">
                <br>
                <br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>
