<html>
<body>
    <h1>Registro de usuarios</h1>
    <form action="enviarClientes.php" method="post">
        <label>Nombre:</label>
        <input type = "text" name="nombre" method = "post">

        <label>Apellido:</label>
        <input type = "text" name="apellido" method = "post">

        <label>Fecha de nacimiento:</label>
        <input type = "date" name="nacimiento" method = "post">

        <input type = "submit" name="enviar" methos = "post">
    </form>
</body>
</html>