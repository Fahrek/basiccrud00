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

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Nombre" name="fname" required>
    </div>
    
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Apellido" name="lname" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" name="email" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Puesto" name="position" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Salario" name="salary" required>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-secondary" value="Registrar">
    </div>
</form>

<?php 

$register = new EmployeesC();
$register -> EmployeesRegisterC();

