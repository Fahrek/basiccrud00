<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<?php

class EmployeesC {
    
    public function CreateEmployeesC() 
    {
        if(isset($_POST['fnameR'])) {
            
            $dataC = [
                'fname'    => $_POST['fnameR'], 
                'lname'    => $_POST['lnameR'], 
                'email'    => $_POST['emailR'], 
                'position' => $_POST['positionR'], 
                'salary'   => $_POST['salaryR']
            ];
            $tblDB = 'employees';
            $res   = EmployeesM::CreateEmployeesM($dataC, $tblDB);
            
            if ($res == 'OK') {
                
                echo "<script> swal.fire({
                        title: '¡CORRECTO!',
                        text: 'El empleado se ha guardado satisfactoriamente',
                        type: 'success',
                        timer: 3000
                      }).then(function(){
                             window.location.href = 'http://localhost/projects/basiccrud/index.php?route=employees';
                        });
                      </script>";
            } else {
                
                echo "<script> swal.fire({
                        title: '¡ERROR!',
                        text: 'Ha habido problemas al guardar',
                        type: 'error',
                       timer: 3000
                      }).then(function(){
                             window.location.href = 'http://localhost/projects/basiccrud/index.php?route=employees';
                        });
                     </script>";
            }
        }
    }
    
    public function ReadEmployeesC() 
    {
        $tblDB = "employees";
        $res   = EmployeesM::ReadEmployeesM($tblDB);
        
        foreach ($res as $value) {
            echo '<tr>
                    <td>'.$value['fname'].'</td>
                    <td>'.$value['lname'].'</td>
                    <td>'.$value['email'].'</td>
                    <td>'.$value['position'].'</td>
                    <td>'.$value['salary'].'€</td>
                    <td><a href="index.php?route=edit&id='.$value['id'].'"><button class="btn btn-success">Editar</button></a></td>
                    <td><a href="index.php?route=employees&idD='.$value['id'].'"><button class="btn btn-danger">Borrar</button></a></td>
                  </tr>';
        }
    }
    
    public function EditEmployeesC() 
    {
        $dataC = $_GET['id'];
        $tblDB = "employees";
        $res   = EmployeesM::EditEmployeesM($dataC, $tblDB);
        
        echo '<input type="hidden" name="idE" value="'.$res['id'].'">
              <div class="form-group">
                  <input type="text" class="form-control" name="fnameE" value="'.$res['fname'].'" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="lnameE" value="'.$res['lname'].'" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="emailE" value="'.$res['email'].'" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="positionE" value="'.$res['position'].'" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="salaryE" value="'.$res['salary'].'" required>
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-secondary" value="Actualizar">
              </div>';
    }
    
    public function UpdateEmployeesC() 
    {
        if(isset($_POST['fnameE'])) {
            
            $dataC = [
                'id'       => $_POST['idE'],
                'fname'    => $_POST['fnameE'],
                'lname'    => $_POST['lnameE'],
                'email'    => $_POST['emailE'],
                'position' => $_POST['positionE'],
                'salary'   => $_POST['salaryE']
            ];
            $tblDB = "employees";
            $res   = EmployeesM::UpdateEmployeesM($dataC, $tblDB);
            
            if ($res == 'OK') {
                
                echo "<script> swal.fire({
                        title: '¡CORRECTO!',
                        text: 'El empleado se ha actualizado correctamente',
                        type: 'success',
                        timer: 3000
                      }).then(function(){
                             window.location.href = 'http://localhost/projects/basiccrud/index.php?route=employees';
                        });
                      </script>";
            } else {
                
                echo "<script> swal.fire({
                        title: '¡ERROR!',
                        text: 'Ha habido problemas al editar',
                        type: 'error',
                       timer: 3000
                      }).then(function(){
                             window.location.href = 'http://localhost/projects/basiccrud/index.php?route=employees';
                        });
                     </script>";
            }
        }
    }
    
    public function DeleteEmployeesC()
    {
        if(isset($_GET['idD'])) {
            
            $dataC = $_GET['idD'];
            $tblDB = "employees";
            $res   = EmployeesM::DeleteEmployeesM($dataC, $tblDB);
            
            if ($res == 'OK') {
                
                echo "<script> swal.fire({
                        title: '¡CORRECTO!',
                        text: 'El empleado se ha elminiado satisfactoriamente',
                        type: 'success',
                        timer: 3000
                      }).then(function(){
                             window.location.href = 'http://localhost/projects/basiccrud/index.php?route=employees';
                        });
                      </script>";
            } else {
                
                echo "<script> swal.fire({
                        title: '¡ERROR!',
                        text: 'Ha habido problemas al borrar',
                        type: 'error',
                       timer: 3000
                      }).then(function(){
                             window.location.href = 'http://localhost/projects/basiccrud/index.php?route=employees';
                        });
                     </script>";
            }
            
        }
    }
}
