<!DOCTYPE html>
<html>
    <head>
        <title>Tabla categoria</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container well col-xs-12 col-lg-4 col-lg-offset-4">
            <form  id="crearproduct" class="col-xs-12 col-lg-10 col-lg-offset-1" method="POST" action="<?php echo 'index.php?controller=Categoria&action=crearcategoria'; ?>">

                <p>ID Categoria</p>
                <input type="text" id="cat_idCategoria"  name="cat_idCategoria" class="form-control selcls">
                <p>nombre</p>
                <input type="text" class="form-control" id="cat_nombre"  name="cat_nombre"><br> 
                <textarea type="file" class="form-control" id="cat_descripcion"  name="cat_descripcion" cols="10" rows="5" placeholder="Descripción"></textarea>
                <input type="submit">
            </form>
        </div>
    </body>
</html>
