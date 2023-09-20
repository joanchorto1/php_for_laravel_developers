<?php

require 'config.php';
require 'helpers.php';
require 'Task.php';





//dd($dsn);

$dbh = connectDB($config);



$statement= $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();

$tasks =$statement->fetchAll(PDO::FETCH_CLASS,'Task');

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






