<!DOCTYPE html>
<html>
    <head>
        <title>Tabla cotizacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class=" container well col-xs-12 col-lg-8 col-lg-offset-2">
            <div class="well" style="text-align: center"><h3>Nuevo contacto</h3></div>
            <form id="crearcontacto" method="POST" action="<?php echo "index.php?controller=Contacto&action=index"; ?>">
                <div class="row">
                        <div  class="col-xs-12 col-lg-6"> 
                        <p>Codigo de Contacto</p>
                        <input type="text" class="form-control" id="con_codigo"  name="con_codigo">
                        <p>Tipo de Contacto</p>
                        <select class="form-control">
                            <option type="text" id="cp_nit"  name="cp_nit" value="nit cliente potencial">NIT cliente potencial</option>
                            <option type="text" id="pro_nit"  name="pro_nit"  value="nit de proveedor">NIT de proveedor</option>
                            <option type="text" id="cli_documento"  name="cli_documento" value="documento de cliente">Documento de cliente</option>
                        </select>
                        <p>Documento/NIT</p>
                        <input type="text" class="form-control">
                        <p>Estado civil</p>
                        <input type="text" class="form-control" id="con_estadoCivil"  name="con_estadoCivil">
                        <p>Cargo</p>
                        <input type="text" class="form-control" id="con_cargo"  name="con_cargo">
                        
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <p>Telefono</p>
                        <input type="text" class="form-control"id="con_telefono"  name="con_telefono">
                        <p>Profesión</p>
                        <input type="text" class="form-control" id="con_profesion"  name="con_profesion">
                        <p>Correo electronico</p>
                        <input type="text" class="form-control" id="con_email"  name="con_email">
                        <p>Nombre Completo</p>
                        <input type="text" class="form-control" id="con_nombreCompleto"  name="con_nombreCompleto">
                        <p>Fecha de Nacimiento</p>
                        <input type="date" class="form-control" id="con_fechaNacimiento"  name="con_fechaNacimiento">
                        <br>
                        
                    </div>
                    <br style="text-align: center">
                        <input type="submit" class=" btn btn-success col-xs-12 col-lg-6 col-lg-offset-3">
                </div>
            </form>
        </div>
    </body >
</html>
