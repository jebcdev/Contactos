<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('index'); 
});



Route::get('/contacts',[ContactController::class, 'index']);


require __DIR__ . '/auth.php';
