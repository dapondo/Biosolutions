<html>
    <head>
        <title>Modificar</title>
    </head>
    <body>  
        <br>
        <div class="container well col-xs-12 col-lg-10 col-lg-offset-1">
            <form  method="POST" action="<?php echo "index.php?controller=cliente&action=consultarcliente"; ?>">

                <div class="col-xs-12 col-lg-6 col-lg-offset-1">
                    <input name="documento_consultar" value= "<?php echo $documento_consultar; ?>" class="form-control" placeholder="Consultar">
                    <?php
                    ?>
                </div>

                <div class="col-lg-3">
                    <select name="filtro" class="form-control col-lg-6">
                        <option value ='cli_nombre'>Nombre</option>
                        <option value='cli_documento'>Documento</option>
                        <option value='cli_ciudad'>Ciudad</option>
                    </select>
                </div>
                <div class = "col-xs-12 col-lg-12 col-lg-offset-1" >
                    <input type = "submit" class = "btn btn-success" style = "margin-top: 20px;" name = "consultar" value = "Consultar">
                </div>
            </form>        
        </div>


        <?php
        echo "
        <div class='container well col-xs-12 col-lg-10 col-lg-offset-1'>
        <div class = 'col-xs-6 col-lg-3 well'>Documento</div>
        <div class = 'col-xs-6 col-lg-2 well'>Pagina Web</div>
        <div class = 'col-xs-6 col-lg-2 well'>Dirección</div>
        <div class = 'col-xs-6 col-lg-2 well'>Email</div>
        <div class = 'col-xs-6 col-lg-1 well'>Zona</div> 
        <div class = 'col-xs-6 col-lg-2 well'>Funcionalidades</div>      ";
        if (isset($mensajes)) {
            echo $mensajes;
        }
        if (isset($clientefiltro)) {
            foreach ($clientefiltro as $cliente) {
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
                echo "
        <form id='formcliente' method='POST' action='index.php?controller=Cliente&action=modificarbd;' ?>
        <div class = 'col-xs-6 col-lg-3 well'><p name = 'cli_documento'>$cli_documento</p></div>
        <div class = 'col-xs-6 col-lg-2 well'><p name = 'cli_paginaWeb'>$cli_paginaWeb</p></div>
        <div class = 'col-xs-6 col-lg-2 well'><p name = 'cli_direccion'>$cli_direccion</p></div>
        <div class = 'col-xs-6 col-lg-2 well'><p name = 'cli_email'>$cli_email</p></div>
        <div class = 'col-xs-6 col-lg-1 well'><p name = 'cli_zonaCliente'>$cli_zonaCliente</p></div>  
        <a href='index.php?controller=Cliente&action=modificar&id=$cliente->cli_documento;' class='btn btn-success col-lg-2 col-xs-1' style='margin-top: 1px;'>Modificar</a>
        <br>
        <br>    
         <a href='index.php?controller=Cliente&action=borrar&id=$cliente->cli_documento;'class='btn btn-danger col-lg-2 col-xs-1' style='margin-top: 1px;'>eliminar</a>    
        </form> ";
            }

            if ($cli_documento != "") {
                
            }
        }
        ?>
    </body>
</html>


