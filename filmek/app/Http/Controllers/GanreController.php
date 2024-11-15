<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GanreController extends Controller
{
    public function create(){
        return view('movies.gcreate');
    }
}
