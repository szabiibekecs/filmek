<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ganre;

class GanreController extends Controller
{
    public function create(){
        return view('movies.gcreate');
    }

    public function store(Request $request){
        $request->validate([
            'nev' => 'required|string|max:255'
        ]);

        Ganre::create($request->all());

        return redirect()->back()->with('success','genre stored');
    }
}
