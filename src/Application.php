<?php

namespace Project;

use Project\Http\Route;
use Project\Http\Request;


class Application
{
    private static $instance = null;

    private final function __construct()
    {

        $route = new Route(new Request);

        $route->resolve();

    }
    public static function run(){
        if(self::$instance === null){

            self::$instance = new Application;

        }
        return self::$instance;
    }
}