<?php

use App\Models\Writer;
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
    "pagetitle" => "About Us",
    "maintitle" => "Sago Mango Company Profile"
]);

Route::view('/menu', 'menu',
[   
    "pagetitle" => "Home",
    "maintitle" => "Menu List",
    "writers" => Writer::index()
]);

Route::get('writer/{id}', function($id){
    return view('show', [
        'pagetitle' => 'Writer',
        'maintitle' => 'Menu Details',
        'writer' => Writer::showWriter($id)
    ]);
});

Route::view('/contactus', 'contact',
[
    "pagetitle" => "Contact",
    "maintitle" => "Contact : hazelanak1@gmail.com "
]);


// Route::view('/writer', 'index',
// [
//     "pagetitle" => "Home",
//     "maintitle" => "Writers in My Library",
//     "writers" => Writer::index()

// ]);