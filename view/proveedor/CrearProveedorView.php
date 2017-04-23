<html>
    <head>
        <title>Crear</title>
        <link href="../../../SoluciónPedro/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../../SoluciónPedro/css/menucss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="container well col-xs-12 col-md-4  col-md-offset-4">
            <div class="well col-xs-12 col-lg-12"><h3 style="text-align: center">Nuevo proveedor</h3></div>
            <form class="well col-xs-12 col-lg-12" action="index.php?controller=Proveedor&action=crearproveedor" method="POST">
                <div>Nit</div>
                <div class="form-group"><input class="form-control" type="text" name="pro_nit"></div>
                <div>Nombre</div>
                <div class="form-group"><input class="form-control" type="text"  name="pro_Nombre"></div>
                <div>Email</div>
                <div class="form-group"><input class="form-control" type="text" name="pro_emailEmpresa"></div>
                <div>Pagina Web</div>
                <div class="form-group"><input class="form-control" type="text" name="pro_paginaWeb"></div>
                <div>Dirección</div>
                <div class="form-group"><input class="form-control" type="text" name="pro_direccion"></div>
                <div>Telefono</div>
                <div class="form-group"><input  class="form-control" type="text" name="pro_telefono"></div>
                <div>Pais</div>
                <div class="form-group"><input class="form-control" type="text" name="pro_pais"></div>
                <div>Ciudad</div>
                <div class="form-group"><input class="form-control" type="text" name="pro_ciudad"></div>
                <div><br><button class="btn-success form-control" type="submit">Crear</button></div>
            </form>

        </div>

    </body>
</html>
