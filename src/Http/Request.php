<?php

namespace Project\Http;


class Request
{

    public function method()
    {

        return strtolower($_SERVER['REQUEST_METHOD']);

    }

    public function uri()
    {

        $path = $_SERVER['REQUEST_URI'];

        return str_contains($path,'?') ? explode('?',$path)[0] : $path ;

    }
}


