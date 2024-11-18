<?php

namespace Project\View;
class View
{
    public static function make($view,$params = []){

        // Prepare File Path
        $file = explode('.',$view);
        $file = implode('/',$file);

        ob_start();

        // Foreach Varable To Use It In View
        foreach($params as $param => $value){
            $$param = $value;
        }

        // Include The View
        include dirname(__DIR__).'/../Views/'.$file.'.php';
        return ob_get_clean();
    }
    private static function getContent(){
        
    }
}