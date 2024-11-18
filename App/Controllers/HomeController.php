<?php

namespace App\Controllers;

class HomeController
{
    public function index(){
        $name = 'seif';
        return view('home',['name'=>$name]);
    }
    public function header(){
        return view('layout.header');
    }
}