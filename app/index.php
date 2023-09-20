<?php

require 'helpers.php';
require 'Task.php';
require 'config.php';

$type=$config['database']['type'];
$host=$config['database']['host'];
$name=$config['database']['name'];
$dsn="$type:host=$host;dbname=$name";

//dd($dsn);

try {
    $dbh= new PDO($dsn,$config['database']['user'],$config['database']['password']);

}catch (\Exception $e){
    echo 'Ha hagut una excepcio';
}

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






