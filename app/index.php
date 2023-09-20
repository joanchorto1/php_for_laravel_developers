<?php
require 'helpers.php';
require 'Task.php';


//$task= new Task(1,'comprar','anar al super', 0);
//var_dump($task);

$user='debian-sys-maint';
$pass='0riUZMnh2l4hMZoJ';
try {
    $dbh= new PDO('mysql:host=localhost;dbname=phplaraveldevs',$user,$pass);

}catch (\Exception $e){
    echo 'Ha hagut una excepcio';
}



$statement= $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();

$tasks =$statement->fetchAll(PDO::FETCH_CLASS,'task');

var_dump($tasks);



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






