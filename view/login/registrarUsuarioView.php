<html>
    <head>
        <title>Registrar</title>
    </head>
    <body>
        <form method="POST" action="<?php echo "index.php?controller=Login&action=registrarUsuario"; ?>">
        <h1>Documento</h1>
        <input name="usu_documento">
         <h1>Nombre</h1>
        <input name="usu_nombre">
         <h1>Fecha de Nacimiento</h1>
        <input name="usu_fechaNacimiento">
         <h1>Password</h1>
        <input name="usu_password">
         <h1>Telefono</h1>
        <input name="usu_telefono">
         <h1>Nombre de usuario</h1>
        <input name="usu_nombreUsuario">
        <h1>Dirección</h1>
        <input name="usu_direccion">
        <h1>Email</h1>
        <input name="usu_email">
        <input type="submit">
        </form>
    </body>
</html>










