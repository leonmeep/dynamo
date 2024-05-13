<?php

class Database {


    public PDO $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');


        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query, $inputtedName, $inputtedEmail)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute([
            ':name' => $inputtedName,
            ':dob' => $inputtedEmail]);

        return $statement;

    }

}

$subscribers = $db->query("INSERT INTO `subscribers`(`name`, `email`) VALUES (:name, :email);")->fetchAll();

dd($subscribers);