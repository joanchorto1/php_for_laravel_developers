<?php


//PART QUE POTRA EL LARAVEL
use framework\App;

require 'vendor/autoload.php';
require  'framework/bootstrap.php';
require 'routes.php';


//PART DEL PROGRAMA--> CREACIONS MEUES

//$routes= new Router();
//$routes->define($routes);
//$routes->redirect($_SERVER['REQUEST_URI']);
App::get('router')->redirect($_SERVER['REQUEST_URI']);

//require 'app/index.php';
//require 'resources/views/index.blade.php';




