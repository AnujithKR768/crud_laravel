<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use PHPUnit\Runner\HookMethod;

Route::get('/',[HomeController::class,'welcome']);

Route::get('/home',[HomeController::class,'index']);

route::post('upload',[HomeController::class,'upload']);

route::get('/view',[HomeController::class,'view']);

route::get('delete/{id}',[HomeController::class,'delete']);

route::get('search',[HomeController::class,'search']);

route::get('update/{id}',[HomeController::class,'update']);

route::post('update_data/{id}',[HomeController::class,'update_data']);