<html>
    <head>
        <title>Crear</title>
    </head>
    <body>  
        <form id="formeditarcliente" method="POST" action="<?php echo "index.php?controller=cliente&action=consultarcliente"; ?>">

            <h1>Consultar:</h1>
            <?php
            $cli_documento = isset($cliente->cli_documento) ? $cliente->cli_documento : "";
            $cli_paginaWeb = isset($cliente->cli_paginaWeb) ? $cliente->cli_paginaWeb : "";
            $cli_direccion = isset($cliente->cli_direccion) ? $cliente->cli_direccion : "";
            $cli_email = isset($cliente->cli_email) ? $cliente->cli_email : "";
            $cli_zonaCliente = isset($cliente->cli_zonaCliente) ? $cliente->cli_zonaCliente : "";
            $cli_ciudad = isset($cliente->cli_ciudad) ? $cliente->cli_ciudad : "";
            $cli_nombre = isset($cliente->cli_nombre) ? $cliente->cli_nombre : "";
            $cli_pais = isset($cliente->cli_pais) ? $cliente->cli_pais : "";
            $cli_telefono = isset($cliente->cli_telefono) ? $cliente->cli_telefono : "";
            $cli_password = isset($cliente->cli_password) ? $cliente->cli_password : "";
            ?>
            <input type="text" name="documento_consultar" >
            <div><input type="submit" id="consultar" name="consultar" value="Consultar" ></div>
        </form>
        <div id="principalmodificar">
        <form id="formcliente" method="POST" action="<?php echo "index.php?controller=cliente&action=modificarbd"; ?>">
            <?php
            if ($cli_documento != "") {
                ?>
            <div id="principalmodificar1">
                <div id="div-1-2"><input type="hidden" name="cli_documento" value="<?php echo $cli_documento; ?>"></div>
                <p>Pagina Web</p>
                <div id="div-1-20"><input type="text" class="In-1-1" name="cli_paginaWeb" value="<?php echo $cli_paginaWeb; ?>"></div>
                <p>Dirección</p>
                <div id="div-1-3"><input type="text" class="In-1-1" name="cli_direccion" value="<?php echo $cli_direccion; ?>"></div>
                <p>Email</p>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="cli_email" value="<?php echo $cli_email; ?>"></div>
                <p>Zona</p>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="cli_zonaCliente" value="<?php echo $cli_zonaCliente; ?>"></div>
                <p>Ciudad</p>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="cli_ciudad" value="<?php echo $cli_ciudad; ?>"></div>
                </div>
            <div id="principalmodificar2">
                <p>Nombre</p>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="cli_nombre" value="<?php echo $cli_nombre; ?>"></div>
                <p>País</p>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="cli_pais" value="<?php echo $cli_pais; ?>"></div>
                <p>Telefono</p>
                <div id="div-1-7"><input type="text" class="In-1-1"    name="cli_telefono" value="<?php echo $cli_telefono; ?>"></div>
                <p>Contraseña</p>
                <div id="div-1-7"><input type="password" class="In-1-1"    name="cli_password" value="<?php echo $cli_password; ?>"></div>
                <br>
                <div class="Editar"><input type="submit" value="Modificar"></div>
            </div>    
            </div>
                    <?php   
                }
                if ($cli_zonaCliente == "0") {
                    echo 'nada';
                }
                ?>

        </form> 


    </body>
</html>


