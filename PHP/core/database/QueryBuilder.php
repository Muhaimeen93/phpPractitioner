<?php

class QueryBuilder {

  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table ,$intoClass)  //gets the table name to read and class name to store
  {
    $statement = $this->pdo->prepare("select * from {$table}");  //query initiated

    $statement->execute();  

    return $statement->fetchAll(PDO::FETCH_CLASS,$intoClass); //fetching all data and stroing in the class
  }

}
