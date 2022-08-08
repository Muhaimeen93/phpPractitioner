<?php

require "vendor/autoload.php";
require 'core/bootstrap.php';
//$database= require 'core/bootstrap.php';  //gets the database object
$database = $app['database'];

require Router::load('routes.php')
    ->direct(Request::uri(),Request::method());
