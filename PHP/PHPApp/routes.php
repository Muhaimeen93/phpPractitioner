<?php



$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
//$router->post('names','controller/add-name.php');

$router->get('users','UsersController@index');

$router->post('users','UsersController@store');



/*
$router->define ( [
  '' => 'controller/index.php',
  'about'=> 'controller/about.php',
  'about/culture'=>'controller/about-culture.php',
  'contact'=>'controller/contact.php',
  'names' => 'controller/add-name.php'
]);
*/
