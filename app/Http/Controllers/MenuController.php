<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('menu', [
            'pagetitle' => 'Menu',
            'maintitle' => 'Menu List',
            'menus' => Menu::index()
        ]);
    }

    public function show($id){
        return view('show', [
            'pagetitle' => 'Menu',
            'maintitle' => 'Menu List',
            'menu' => Menu::showMenu($id)
        ]);
    }
}
