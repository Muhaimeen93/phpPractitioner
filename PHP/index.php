<?php


$database= require 'core/bootstrap.php';  //gets the database object


require Router::load('routes.php')
    ->direct(Request::uri(),Request::method());
