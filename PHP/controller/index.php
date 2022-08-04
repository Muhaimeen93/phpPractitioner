<?php

require 'Task.php';


$tasks = $database->selectAll('todos','Task'); //gets all data from the table 'todos' and stores in the class 'Task'

require 'views/index.view.php';
