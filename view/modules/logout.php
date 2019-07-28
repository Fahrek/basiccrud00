<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<?php
        session_start();
        session_destroy();
        
        echo "<script>
        swal.fire({
             text: 'Has cerrado la sesión',
             timer: 3000
        }).then(function(){
             window.location.href = 'http://localhost/projects/basiccrud/index.php?route=login';
        });
        </script>";
