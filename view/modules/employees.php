<?php session_start();

if (!$_SESSION['login']) {
        
        header('Location:index.php?route=login');
        
        exit();
}

?>

<br>
<h1>Empleados</h1>

<table id="t1" border="1">

    <thead>

        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Puesto</th>
            <th>Salario</th>
            <th></th>
            <th></th>

        </tr>

    </thead>

    <tbody>

        <?php
        $show = new EmployeesC();
        $show -> ReadEmployeesC();
        ?>

    </tbody>

</table>

<?php

$delete = new EmployeesC();
$delete -> DeleteEmployeesC();
