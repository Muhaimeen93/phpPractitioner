<?php


require "vendor/autoload.php";
require 'core/bootstrap.php';

use PHPApp\Core\App;
use PHPApp\Core\Router;
use PHPApp\Core\Request;
//$database= require 'core/bootstrap.php';  //gets the database object
$database = App::get('database');

Router::load('PHPApp/routes.php')
    ->direct(Request::uri(),Request::method());
