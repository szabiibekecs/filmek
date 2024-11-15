<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Ganre;

class MovieController extends Controller
{
    public function create(){
        $genres = Ganre::all();
        return view('movies.fcreate', compact('genres'));
    }

    public function store(Request $request){
        $request->validate([
            "cim" => 'required|string|max:255',
            "rendezo" => 'required|string|max:255',
            "ganre_id" => 'required|integer',
            "megjelenes" => 'required|string|max:255'
        ]);

        Movie::create($request->all());

        return redirect()->back()->with('success','movie stored');
    }
}
