<?php

use Project\View\View;
if(!function_exists('view')){
    function view($view,$param = []){
        return View::make($view,$param);
    }
}