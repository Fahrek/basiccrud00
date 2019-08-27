<?php

class Model {

        static public function RoutesModel($routes) {
                if ($routes == 'login' || $routes == 'register' || $routes == 'employees' || $routes == 'logout' || $routes == 'edit') {
                        $page = 'view/modules/' . $routes . '.php';
                } else if ($routes == 'index') {
                        $page = 'view/modules/login.php';
                } else {
                        $page = 'view/modules/login.php';
                }
                
                return $page;
        }

}
