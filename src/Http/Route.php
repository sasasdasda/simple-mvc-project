<?php

namespace Project\Http;

use Closure;

class Route
{
    public Request $request;

    public static array $routes = [];
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public static function get($route,string|callable|array $action ){

        self::$routes['get'][$route] = $action;

    }

    public static function post($route,string|callable|array $action ){

        self::$routes['post'][$route] = $action;

    }
    public function resolve(){

        $method = $this->request->method();
        
        $path = $this->request->uri();

        $route = self::$routes[$method][$path] ?? false ;

        if(!$route){
            return "Not Found";
        }

        if($route instanceof Closure){
            call_user_func_array($route,[]);
            return 'This is Function';
        }

        if(is_array($route)){
            echo call_user_func_array([ new $route[0],$route[1] ],[] );
        }

        if(!is_array($route) && !is_callable($route)){
            echo $route;
        }

    }
}