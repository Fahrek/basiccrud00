<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<?php

class EmployeesC {
    
    public function EmployeesRegisterC() {
        if(isset($_POST['fname'])) {
            $dataC = ['fname' => $_POST['fname'], 'lname' => $_POST['lname'], 'email' => $_POST['email'], 'position' => $_POST['position'], 'salary' => $_POST['salary']];
            $tblDB = 'employees';
            $res   = EmployeesM::EmployeesRegisterM($dataC, $tblDB);
            
            
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
    
    public function ListEmployeesC() {
        $tblBD = "employees";
        $res = EmployeesM::ListEmployeesM($tblBD);
        
        foreach ($res as $value) {
            echo '<tr>
                    <td>'.$value['fname'].'</td>
                    <td>'.$value['lname'].'</td>
                    <td>'.$value['email'].'</td>
                    <td>'.$value['position'].'</td>
                    <td>'.$value['salary'].'€</td>
                    <td><button class="btn btn-success">Editar</button></td>
                    <td><button class="btn btn-danger">Borrar</button></td>
                  </tr>';
        }
    }
    
}
