<?php

require_once 'connBD.php';

class AdminM extends ConnBD 
{
        static public function LoginM($dataC, $tblDB) {

                $pdo = ConnBD::cBD()->prepare( "SELECT user, pass FROM $tblDB WHERE user = :user" );
                $pdo -> bindParam( ':user', $dataC['user'], PDO::PARAM_STR );
                $pdo -> execute();

                return $pdo -> fetch();

                $pdo -> close();
        }

}
