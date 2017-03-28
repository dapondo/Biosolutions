<html>
    <head>
        <title>Crear</title>
    </head>
    <body>
        <div>
            <div id="menucompleto">
                <div class="divformcliente1">
                    <form id="formcliente" method="POST"  action="<?php echo "index.php?controller=cliente&action=crearcliente"; ?>" >
                        <h1>Crear:</h1>
                        <p class="letra">Documento</p>
                        <div id="div-1-1"><input type="text" id="input-2" name="cli_documento" required></div>
                        <p class="letra">Nombre</p>
                        <div id="div-1-7"><input type="text"  name="cli_nombre" required></div>
                        <p class="letra">Pagina Web</p>
                        <div id="div-1-2"><input type="text" name="cli_paginaWeb"></div>
                        <p class="letra">Dirección</p>
                        <div id="div-1-3"><input type="text" name="cli_direccion"></div>
                        <p class="letra">Email</p>
                        <div id="div-1-4"><input type="text" name="cli_email"></div>
                </div>
                <div id="divformcliente2">
                    <p class="letra">Ciudad</p>
                    <div id="div-1-6"><input type="text"  name="cli_ciudad"></div>
                    <p class="letra">Zona</p>
                    <div id="div-1-5"><input type="text" name="cli_zonaCliente" required></div>
                    <p class="letra">País</p>
                    <div id="div-1-8"><input type="text"  name="cli_pais"></div>
                    <p class="letra">Telefono</p>
                    <div id="div-1-9"><input type="text"  name="cli_telefono"></div>
                    <p class="letra">Contraseña</p>
                    <div id="div-1-10"><input type="text" name="cli_password"></div>
                    <br>
                    <div><input type="submit" id="crear" name="enviarcliente" value="Crear"></div>
                </div> 
                </form>
                  

            </div> 
    </body>
</html>
