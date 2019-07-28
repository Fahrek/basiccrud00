<?php

session_start();

if (!$_SESSION['login']) {
        
        header('Location:index.php?route=login');
        
        exit();
}

?>

<br>
<h1>REGISTRAR UN EMPLEADO</h1>

<form method="POST" action="">

    <input type="text" placeholder="Nombre" name="nombre" required>

    <input type="text" placeholder="Apellido" name="apellido" required>

    <input type="email" placeholder="Email" name="email" required>

    <input type="text" placeholder="Puesto" name="puesto" required>

    <input type="text" placeholder="Salario" name="salario" required>

    <input type="submit" value="Registrar">

</form>

