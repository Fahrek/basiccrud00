<?php
session_start();

if (!$_SESSION['login']) {

    header('Location:index.php?route=login');

    exit();
}
?>

<br>
<h1>REGISTRAR EMPLEADOS</h1>

<form method="POST">

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Nombre" name="fnameR" required>
    </div>
    
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Apellido" name="lnameR" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" name="emailR" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Puesto" name="positionR" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Salario" name="salaryR" required>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-secondary" value="Registrar">
    </div>
</form>

<?php 

$register = new EmployeesC();
$register -> CreateEmployeesC();

