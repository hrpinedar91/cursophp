<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', action: function () {
    return 'Hello World!';
});

Route::get('/personal-info/{age}', action: function (Request $request, int $age) {
    $name = $request -> query(key: 'name');
    var_dump(value: $age);
    return [
        "name" => "John Doe",
        "email" => "hrpinedar91@gmail.com",
        "phone" => "1234567890",
        "pet" => [
            "name" => $name,
            "age" => $age
        ]
        ];
});

Route::get('/hello', 'App\Http\Controllers\TestController@hello');

Route::get('/testDB', 'App\Http\Controllers\TestController@testDBConnection');

Route::resource('/tasks', \App\Http\Controllers\TaskController::class);
