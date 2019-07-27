<?php

class RoutesController {

        public function Layout() {
                include 'view/layout.php';
        }

        public function Routes() {
                if (isset($_GET['route'])) {
                        $routes = $_GET['route'];
                } else {
                        $routes = index;
                }
                
                $res = Model::RoutesModel($routes);
                
                include $res;
        }

}
