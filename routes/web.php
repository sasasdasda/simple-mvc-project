<?php

use Project\Http\Route;
use App\Controllers\HomeController;


Route::get('/','This is / Page<br>');

Route::get('/home',[HomeController::class,'index']);
Route::get('/header',[HomeController::class,'header']);