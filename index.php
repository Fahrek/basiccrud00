<?php

require_once 'controller/routesC.php';
require_once 'controller/adminC.php';
require_once 'controller/employeesC.php';

require_once 'model/routesM.php';
require_once 'model/adminM.php';
require_once 'model/employeesM.php';

$routes = new RoutesController();
$routes -> Layout();

