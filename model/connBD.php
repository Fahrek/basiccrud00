<?php

class ConnBD {

        public function cBD($host = 'localhost', $user = 'root', $pass = '', $dbnm = 'bcrud') {
                $bd = new PDO("mysql:host=$host;dbname=$dbnm", $user, $pass);
                return $bd;
        }

}
