<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<?php

class AdminC 
{
        public function LoginC() {
                if (isset($_POST['user'])) {
                        
                      $dataC = array( 'user' => $_POST['user'], 'pass' => $_POST['pass'] );
                      $tblDB = 'admin';
                      $res   = AdminM::LoginM($dataC, $tblDB);
                      
                      if ( $res['user'] == $_POST['user'] &&  $res['pass'] == $_POST['pass'] ) {
                              
                              session_start();
                              $_SESSION['login'] = true;
                              
                              header('Location:index.php?route=employees');
                      } else {
                              echo "<script> swal({
                                title: '¡ERROR!',
                                text: 'Esto es un mensaje de error',
                                type: 'error',
                                });</script>";
                      }
                }
        }
}
