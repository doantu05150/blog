<?php
$router->get('', 'PagesController@home');
$router->get('user', 'PagesController@home');      
$router->get('register', 'PagesController@register');
$router->POST('signup', 'UsersController@signup');
$router->POST('login', 'UsersController@login');
$router->POST('send', 'UsersController@send');
$router->POST('post', 'UsersController@post');
$router->get('logout', 'UsersController@logout');

//$router->post('names', 'add-name.php');
