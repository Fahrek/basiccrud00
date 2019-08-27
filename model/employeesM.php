<?php require_once 'connBD.php';

class EmployeesM extends ConnBD {
    
    static public function CreateEmployeesM($dataC, $tblBD) 
    {
        
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
    
    static public function ReadEmployeesM($tblDB) 
    {
        $pdo = ConnBD::cBD()->prepare("SELECT * FROM $tblDB");
        $pdo -> execute();
        return $pdo -> fetchAll();
        $pdo -> close();
    }
    
    static public function EditEmployeesM($dataC, $tblDB) 
    {
        $pdo = ConnBD::cBD() -> prepare("SELECT * FROM $tblDB WHERE id = :id");
        $pdo -> bindParam( ':id', $dataC, PDO::PARAM_INT );
        $pdo -> execute();
        return $pdo -> fetch();
        $pdo -> close();
    }
    
    static public function UpdateEmployeesM($dataC, $tblDB)
    {
        $pdo = ConnBD::cBD() -> prepare("UPDATE $tblDB SET fname = :fname, lname = :lname, email = :email, position = :position, salary = :salary WHERE id = :id");
        
        $pdo -> bindParam( ':id',       $dataC['id'],       PDO::PARAM_INT );
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
    
    static public function DeleteEmployeesM($dataC, $tblDB)
    {
        $pdo = ConnBD::cBD() -> prepare("DELETE FROM $tblDB WHERE id = :id");
        $pdo -> bindParam( ':id', $dataC, PDO::PARAM_INT );
        
        if ($pdo -> execute()) {
            return "OK";
        } else {
            return "FAIL";
        }
        
        $pdo -> close();
    }
}
