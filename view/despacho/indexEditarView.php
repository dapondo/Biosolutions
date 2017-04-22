<html>
    <head>
        <title>Crear</title>
    </head>
    <body>
        <form method="POST" action="index.php?controller=Despacho&action=modificarbd" style="margin-left: 350px">
            <div id="d-2">
                <h2>Fecha</h2>
                <input type="date" name="des_FechaEnvio">
                <h1>Despacho:</h1>
                <div id="div-1-1"><input type="text"  class="In-1-1" id="input-2" name="des_CodigoDespacho" placeholder="Codido de despacho"></div>
                <br>
                <div id="div-1-2"><input type="text" class="In-1-1" name="des_Transportadora" placeholder="Transportadora"></div>
                <br>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="des_Contrato_Oc" placeholder="Contrato/Oc"></div>
                <br>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="des_NumeroGuia" placeholder="Numero de Guia"></div>
                <br>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="des_CantidadCajas" placeholder="des_Cantidad de Cajas"></div>
                <br>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="des_Numfactura" placeholder="Numero de factura"></div>
                <br>
<!--                <select name="cli_documento">
                   <?php
                    //var_dump($allusers);
                    if ($allusers != "") {
                        foreach ($allusers as $item) {
                            echo "<option value='$item->cli_documento'>$item->cli_nombre</option>";
                        }
                    }
                    ?>
                </select>
                <select name="usu_documento">
                    <?php
                    //var_dump($allusers);
                    if ($allusuario != "") {
                        foreach ($allusuario as $usu) {
                            echo "<option value='$usu->usu_documento'>$usu->usu_documento</option>";
                        }
                    }
                    ?>
                </select>-->

                <br>
                <br>
                <div id="div-1-3"><input type="text" class="In-1-1" name="des_ObservacionesEnvio" placeholder="Observaciones de Envio"></div>
                <br>
                <div><input type="submit" class="sub-1" name="enviarcrear"></div>
                <br>
            </div>
        </form>
    </body>
</html>