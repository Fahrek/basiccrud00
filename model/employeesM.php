<?php

require_once 'connBD.php';

class EmployeesM extends ConnBD {

    static public function EmployeesRegisterM($dataC, $tblBD) {
        
        $pdo = ConnBD::cBD() -> prepare("INSERT INTO $tblBD (fname, lname, email, position, salary) VALUES (:fname, :lname, :email, :position, :salary)");
        
        $pdo -> bindParam( ':fname',    $dataC['fname'],    PDO::PARAM_STR );
        $pdo -> bindParam( ':lname',    $dataC['lname'],    PDO::PARAM_STR );
        $pdo -> bindParam( ':email',    $dataC['email'],    PDO::PARAM_STR );
        $pdo -> bindParam( ':position', $dataC['position'], PDO::PARAM_STR );
        $pdo -> bindParam( ':salary',   $dataC['salary'],   PDO::PARAM_STR );
       
        if ($pdo -> execute()) {
    
            return "OK";
            
        } else {
            
            return "FAIL";
        }
        
        $pdo -> close();
    }
    
    static public function ListEmployeesM($tblDB) {
        $pdo = ConnBD::cBD()->prepare("SELECT * FROM $tblDB");
        $pdo -> execute();
        return $pdo -> fetchAll();
        $pdo -> close();
    }

}
