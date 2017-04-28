 <!--Editar-->        
        <form id="editar" method="POST" action="<?php echo 'index.php?controller=clientepotencial&action=modificarbd'; ?>">
            <h1>Edite su registro</h1>
            <br>
            <input  disabled type="text" name="cp_nit" placeholder="Nit" value="<?php echo $clientepotencial->cp_nit;?>">
            <br>
            <br>
            <input  type="text" name="cp_nombre" placeholder="Nombre" value="<?php echo $clientepotencial->cp_nombre;?>">
            <br>
            <br>
            <input  type="text" name="cp_ciudad" placeholder="Ciudad" value="<?php echo $clientepotencial->cp_ciudad;?>">
            <br>
            <br>
            <input  type="text" name="cp_direccion" placeholder="Dirección" value="<?php echo $clientepotencial->cp_direccion;?>">
            <br>
            <br>
            <input  type="textarea" name="cp_observaciones" placeholder="Observaciones" value="<?php echo $clientepotencial->cp_observaciones;?>">
            <br>
            <br>
            <input value="Guardar" type="submit" />
        </form>

 