<?php


require 'core/Router.php';
require 'core/database/Connection.php';   //connect the database
require 'core/database/QueryBuilder.php'; //intitate querys
require 'core/Request.php';

$config = require 'config.php';  //database configs

$pdo = Connection::make($config['database']);  //gets the database as an object

return new QueryBuilder($pdo);
