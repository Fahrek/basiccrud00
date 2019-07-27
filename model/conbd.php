<?php

class ConnBD {

        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $dbnm = 'bcrud';

        public function cBD() {
                $bd = new PDO("mysql:host=$this->host;dbname=$this->dbnm", $this->user, $this->pass);
                return $bd;
        }

}
