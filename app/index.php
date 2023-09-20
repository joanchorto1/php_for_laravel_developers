<?php

use framework\Database\Database;

require 'config.php';
require 'helpers.php';




$database = new Database($config);
$tasks= $database->selectAll('tasks');
//$tasks= Database::selectAll('tasks'); //Crida estatica --> sense new
//$tasks= Task::selectAll('taskes'); --> Larabel Eloquent


$greeting = greet();











//________________________INICIS EXEMPLES__________________________________

//VARIABLES

//$name= 'Joan';
//$surname= 'Chorto';
//$greeting ='Hola ' . $name .' '. $surname . ' !!';


//QUERY STRING

//var_dump($_GET['name']);
//$greeting ='Hola ' . $_GET['name'] .' '. $_GET['surname'] . ' !!';

//_______________________Una opció mes correcta_________________

//$name= $_GET['name'];
//$surname= $_GET['surname'];

//$greeting ='Hola ' . $name .' '. $surname . ' !!';






