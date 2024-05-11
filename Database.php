<?php

class Database {


    public PDO $connection;

    public function __construct()
    {

        $dsn = 'mysql:host=localhost;dbname=strange-garden-ml;user=root;port=3306;charset=utf8mb4';
        new PDO($dsn);

        $this->connection = new PDO($dsn);

    }

    public function query($query)
    {

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;

    }

}