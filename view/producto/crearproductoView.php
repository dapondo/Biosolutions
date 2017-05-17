<!DOCTYPE html>
<html>
    <head>
        <title>Tabla producto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container well col-xs-12 col-lg-10 col-lg-offset-1">

            <form  id="crearproduct"  method="POST" action="<?php echo'index.php?controller=Producto&action=crearproducto'; ?>">
                <div class="row">
                    <div class="col-xs-12 col-lg-2"><input type="file" id="prd_foto" name="prd_foto" ><img src="<?php.$_SESSION['echo "prd_foto";'] ?>"></div>
                    <div class="col-xs-12 col-lg-5">
                        <div><p>Id Producto</p></div>
                        <div><input type="text" class="form-control" id="prd_codigoProducto"  name="prd_codigoProducto"></div>
                        
                        <div><p>Categoria</p></div>
                        <div><select type="text" id="cat_idCategoria"  name="cat_idCategoria" class="form-control selcls">
                                <?php
                                //var_dump($allusers);
                                if ($allCat != "") {
                                    foreach ($allCat as $cat) {
                                        echo "<option value='$cat->cat_idCategoria'>$cat->cat_nombre</option>";
                                    }
                                }
                                ?> 
                            </select></div>
                        
                        <div> <p>Proovedor</p></div>
                        <div><select type="text" id="pro_nit"  name="pro_nit" class="form-control selcls">
                                <?php
                                //var_dump($allusers);
                                if ($allProv != "") {
                                    foreach ($allProv as $proveedor) {
                                        echo "<option value='$proveedor->pro_nit'>$proveedor->pro_Nombre</option>";
                                    }
                                }
                                ?>
                            </select></div>
                        <div><p>Tipo de Divisa</p></div>
                        <div><input class="form-control" type="text" id="Dprd_tipoDivisaocumento"  name="prd_tipoDivisa"></div>
                        <div> <p>Costo</p></div>
                        <div><input class="form-control" type="text" id="Dprd_tipoDivisaocumento"  name="prd_costo"></div>
                        <div><p>Tipo de Presentacion</p></div>
                        <div> <input class="form-control" type="text" id="prd_costo"  name="prd_tipoPresentacion"></div>
                    </div>
                    <div class="col-xs-12 col-lg-5">
                        <div> <p>Nombre</p></div>
                        <div> <input class="form-control" type="text" id="prd_nombre"  name="prd_nombre"></div>
                        <div> <p>Descripcion</p></div>
                        <div> <input class="form-control" type="text" id="prd_descripcion"  name="prd_descripcion"></div>
                        <div> <p>Fecha de Vencimiento</p></div>
                        <div> <input class="form-control" type="date" id="prd_fechaVencimiento"  name="prd_fechaVencimiento"></div>
                        <div> <p>Cantidad de Presentacion</p></div>
                        <div> <input class="form-control" type="text" id="prd_cantidadPresentacion"  name="prd_cantidadPresentacion"></div>
                        <div> <p>Lote serial</p></div>
                        <div> <input class="form-control" type="text" id="prd_loteSerial"  name="prd_loteSerial"></div>
                        <div> <p>iva</p></div>
                        <div> <input class="form-control" type="text" id="prd_iva"  name="prd_iva"></div>
                        <div> <p>Foto</p></div>
                        <input type="submit">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
