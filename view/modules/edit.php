<?php session_start();

if (!$_SESSION['login']) {
    header('Location:index.php?route=login');
    exit();
}
?>

<br>
<h1>EDITAR EMPLEADO</h1>

<form method="POST">

<?php 
    $edit = new EmployeesC();
    $edit -> EditEmployeesC();

    $update = new EmployeesC();
    $update -> UpdateEmployeesC();
?>
    
</form>





