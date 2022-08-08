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

  public function insert($table, $parameters)
  {
     $sql = sprintf (
      'insert into %s (%s) values (%s)', $table,
      implode(', ',array_keys($parameters)),
      ':' . implode (', :', array_keys($parameters))
     );

     try {
      $statement = $this->pdo->prepare($sql);

      $statement->execute($parameters);

     }
     catch (Exception $e)
     {
      die('ERROR, something went wrong!');
     }
  }

}
