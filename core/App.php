<?php

namespace App\Core;


class App {

    protected static $registry = [];


    public static function bind ($key, $value) {

        static::$registry [$key] = $value; // ex: static::$registry['database'] ==> $queryBulder
        

    }

    public static function get ($key) {

        if (! array_key_exists($key, static::$registry)) {

            throw new Exception("NO {$key} is bound in container");
            
        }

        return static::$registry[$key];
    }

}