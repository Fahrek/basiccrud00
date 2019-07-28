<br>
<h1>INGRESAR</h1>

<form method="post" action="">

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Usuario" name="user" required>
    </div>

    <div class="form-group">
        <input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
    </div>

    <input type="submit" class="btn btn-secondary" value="Ingresar">

</form>

<?php
$login = new AdminC();
$login->loginC();

