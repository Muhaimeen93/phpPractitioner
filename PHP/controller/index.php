<?php

require 'Task.php';
require 'Users.php';


$tasks = $app['database']->selectAll('todos','Task'); //gets all data from the table 'todos' and stores in the class 'Task'

$users = $app['database']->selectAll('users','Users');


require 'views/index.view.php';
