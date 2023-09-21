<?php

namespace framework\Database;
use App\Models\Task;
use PDO;

class Database
{

    public $config;



    public function __construct($config)
    {
        $this->config = $config;
        $this->conection = new Conection($config);
    }



    function selectAll($table)
    {
        $dbh= $this->conection->connectDB();
        $statement= $dbh->prepare("SELECT * FROM $table ;");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS,Task::class);

//        return fetchAllTasks($this->conection->connectDB());

    }

    function fetchAllTasks($dbh){


    }

}