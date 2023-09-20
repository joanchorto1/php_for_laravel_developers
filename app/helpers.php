<?php

//FUCIONS
function greet(){
    $name =htmlspecialchars($_GET['name']);
    $surname=$_GET['surname'];

    return "Hola $name $surname!!";
}


function dd($xivato){
    var_dump($xivato);
    die();
}



function connectDB($config){
    try {
       return new PDO($config['database']['type'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'] ,
       $config['database']['user'],
        $config['database']['password']);

    }catch (\Exception $e){
        echo 'Ha hagut una excepcio';
    }
}



function fetchAllTasks($dbh){

    $statement= $dbh->prepare('SELECT * FROM tasks;');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
}

