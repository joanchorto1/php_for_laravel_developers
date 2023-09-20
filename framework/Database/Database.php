<?php

namespace framework\Database;
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
        return fetchAllTasks($this->conection->connectDB());
    }
}