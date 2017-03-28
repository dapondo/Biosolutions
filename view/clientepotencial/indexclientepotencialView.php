<!--CrearCliente-->        

        <form id="formregistrar" method="POST" action="<?php echo "index.php?controller=clientepotencial&action=crear";?>">
            <h1>Crear cliente</h1>
            <br>
            <input id="input-nit-consultar" type="text" name="cp_nit" placeholder="Nit">
            <br>
            <br>
            <input id="input-nombre-consultar" type="text" name="cp_nombre" placeholder="Nombre">
            <br>
            <br>
            <input id="input-ciudad-consultar" type="text" name="cp_ciudad" placeholder="Ciudad">
            <br>
            <br>
            <input id="input-direccion-consultar" type="text" name="cp_direccion" placeholder="Dirección">
            <br>
            <br>
            <input id="input-telefono-consultar" type="text" name="cp_telefono" placeholder="Telefono">
            <br>
            <br>
            <input  id="input-observaciones-consultar" type="textarea" name="cp_observaciones" placeholder="Observaciones">
            <br>
            <br>
            <input id="input-consultar" type="submit" name="enviar"  value="Crear">
            <br>
            <br>
            </form>
            <section class="clientepotencial" id="client">
                