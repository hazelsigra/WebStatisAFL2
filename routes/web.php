<?php

use App\Http\Controllers\MenuController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::view('/index', 'index',
[   
    "maintitle" => "Sago Mango Company Profile"
]);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('menu/{id}', [MenuController::class, 'show']);

Route::view('/contactus', 'contact',
[
    "maintitle" => "Contact Us"
]);
