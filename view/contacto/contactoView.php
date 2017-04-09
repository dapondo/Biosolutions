<!DOCTYPE html>
<html>
    <head>
        <title>Tabla cotizacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

            <form id="crearcontacto" method="POST" action="<?php echo "index.php?controller=Contacto&action=index"; ?>">
                <div id="div-contacto-1"> 
                <p>Codigo de Contacto</p>
                <input type="text" id="con_codigo"  name="con_codigo">
                <br>
                <br>
                <select>
                    <option type="text" id="cp_nit"  name="cp_nit" value="nit cliente potencial">nit cliente potencial</option>
                    <option type="text" id="pro_nit"  name="pro_nit"  value="nit de proveedor">nit de proveedor</option>
                    <option type="text" id="cli_documento"  name="cli_documento" value="documento de cliente">documento de cliente</option>
                </select>
                <br>
                <br>
                <input type="text">
                <p>Estado civil</p>
                <input type="text" id="con_estadoCivil"  name="con_estadoCivil">
                <p>Cargo</p>
                <input type="text" id="con_cargo"  name="con_cargo">
                <p>Telefono</p>
                <input type="text" id="con_telefono"  name="con_telefono">
                <p>Profesión</p>
                <input type="text" id="con_profesion"  name="con_profesion">
                </div>
                <div id="div-contacto-2">
                <p>Correo electronico</p>
                <input type="text" id="con_email"  name="con_email">
                <p>Nombre Completo</p>
                <input type="date" id="con_nombreCompleto"  name="con_nombreCompleto">
                 <p>Fecha de Nacimiento</p>
                <input type="date" id="con_fechaNacimiento"  name="con_fechaNacimiento">
                <br>
                <br>
                <input type="submit">
                </div>
            </form>
    </body>
</html>