<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(){
        return view('index', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The writer',
            'writer' => Writer::index()
        ]);
    }

    public function show($id){
        return view('show', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The writer',
            'writer' => Writer::showWriter($id)
        ]);
    }
}
