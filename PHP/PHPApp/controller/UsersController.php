<?php 

namespace PHPApp\Controller;

use PHPApp\Core\App;

class UsersController {

    public function index()
    {
        require 'Task.php';
        require 'Users.php';
        
        
        $tasks = App::get('database')->selectAll('todos','Task'); //gets all data from the table 'todos' and stores in the class 'Task'
        
        $users = App::get('database')->selectAll('users','Users');
        
        
        require view('users',compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name'=> $_POST['name']
        ]);
        return redirect('users');
        
       // header('Location: /users');
    }

}