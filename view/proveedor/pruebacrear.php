<html>
    <head>
        <link href="../../../SoluciónPedro/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../SoluciónPedro/css/menucss.css" rel="stylesheet" type="text/css"/>
        <title>Crear</title>
    </head>
    <body>

        <div class="container well col-lg-12" >
            <form id="CrearProveedor" action="index.php?controller=Proveedor&action=crearproveedor" method="POST">
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12">Nit</div>
                    <div class="col-xs-12 col-lg-12"><input class=" form-control col-xs-12 col-lg-8 " type="text" name="pro_nit"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12">Nombre</div>
                    <div class="col-xs-12 col-lg-12"><input  class=" form-control col-xs-12 col-lg-8" type="text" name="pro_Nombre"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12">Email</div>
                    <div class="col-xs-12 col-lg-12"><input class="col-xs-12 col-lg-8 form-control"  type="text" name="pro_emailEmpresa"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12">Pagina Web</div>
                    <div class="col-xs-12 col-lg-12"><input class="col-xs-12 col-lg-8 form-control"  type="text" name="pro_paginaWeb"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12">Dirección</div>
                    <div class="col-xs-12 col-lg-12"><input class="col-xs-12 col-lg-8 form-control"  type="text" name="pro_direccion"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12">Telefono</div>
                    <div class="col-xs-12 col-lg-12"><input class="col-xs-12 col-lg-8 form-control"  type="text" name="pro_telefono"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12">Pais</div>
                    <div class="col-xs-12 col-lg-12"><input class="col-xs-12 col-lg-8 form-control"  type="text" name="pro_pais"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12">Ciudad</div>
                    <div class="col-xs-12 col-lg-12"><input class="col-xs-12 col-lg-8 form-control" type="text" name="pro_ciudad"></div>
                </div>
                
                <div><button class="botonis"  type="submit">Crear</button></div>

            </form>

        </div>

    </body>
</html>