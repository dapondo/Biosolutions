<html>
    <head>
        <title>Modificar</title>
    </head>
    <body>
             <div>
            <form id="CrearProveedor" action="index.php?controller=Proveedor&action=crearproveedor" method="POST">
                <p>Nit</p>
                <input type="text" name="pro_nit">
                <p>Nombre</p>
                <input type="text" name="pro_Nombre">
                <p>Email</p>
                <input type="text" name="pro_emailEmpresa">
                <p>Pagina Web</p>
                <input type="text" name="pro_paginaWeb">
                <p>Dirección</p>
                <input type="text" name="pro_direccion">
                <p>Telefono</p>
                <input type="text" name="pro_telefono">
                <p>Pais</p>
                <input type="text" name="pro_pais">
                <p>Ciudad</p>
                <input type="text" name="pro_ciudad">
                <button id="btncrear" type="submit">Crear</button>
            </form>
            
        </div>
        
    </body>
</html>
