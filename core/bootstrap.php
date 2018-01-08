<?php
// the new  way  for many values

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
        Connection::make(App::get('config')['database'])
));

// the old way
// $app['config'] = require 'config.php';

// // require 'core/Router.php';
// // require 'core/Request.php';
// // require 'core/database/Connection.php';
// // require 'core/database/QueryBuilder.php';

// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );

function view($name, $data = []) {

        extract($data);

        return require "views/{$name}.view.php";
 
}

function redirect ($path) {
            
        header("Location: /{$path}");
        
}