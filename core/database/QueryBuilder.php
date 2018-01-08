<?php

//namespace Core\Database;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            //
        }
    }

    public function checkExit($table, $email)
    {
        $statement = $this->pdo->prepare("select * from $table where user_email = '$email'");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function checkLogin ($table, $value) {
        $statement = $this->pdo->prepare("select * from $table where user_email = '$value'");
        
        $statement->execute();
        
        $resultSet = $statement->fetch(PDO::FETCH_ASSOC);
        return $resultSet;
        //die (var_dump($resultSet));
        //die(var_dump($statement->fetchAll(PDO::FETCH_CLASS)));
        
    }
    
}