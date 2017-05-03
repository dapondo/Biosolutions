  <!--Editar-->  
 <div class="container well col-xs-12 col-md-4  col-md-offset-4">
        <form id="editar" method="POST" action="<?php echo 'index.php?controller=clientepotencial&action=modificarbd'; ?>">
            <div class="well col-xs-12"><h3>Edite su registro</h3></div>
            <br>
            <input class="form-control" id="input-nit" type="text" name="cp_nit" placeholder="Nit" value="<?php echo $clientepotencial->cp_nit;?>">
            <br>
            <br>
            <input class="form-control"  id="input-nombre" type="text" name="cp_nombre" placeholder="Nombre" value="<?php echo $clientepotencial->cp_nombre;?>">
            <br>
            <br>
            <input class="form-control"  id="input-ciudad" type="text" name="cp_ciudad" placeholder="Ciudad" value="<?php echo $clientepotencial->cp_ciudad;?>">
            <br>
            <br>
            <input class="form-control"  id="input-direccion" type="text" name="cp_direccion" placeholder="Dirección" value="<?php echo $clientepotencial->cp_direccion;?>">
            <br>
            <br>
            <textarea class="form-control"   id="input-observaciones" type="textarea" name="cp_observaciones" placeholder="Observaciones" value=""><?php echo $clientepotencial->cp_observaciones;?></textarea>
            <br>
            <br>
            <input class="form-control  btn btn-success"  value="Guardar" type="submit" />
        </form>

 </div>