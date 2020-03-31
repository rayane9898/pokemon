<?php

namespace App\Http\Controllers;

use App\Pokemon;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::all();
        //
        return view("pokemon/home", compact('pokemon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $type =Type::all();
        // dd($type);
        return view('pokemon/create', compact("type"));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //déclarer un nom de variable pour le storage
        $img = Storage::disk("public")->put("", $request->file('img'));
        $pokemon = new Pokemon();
        $pokemon->type_id=$request->input("type");
        $pokemon ->name=$request->input("name");
        $pokemon->level=$request->input('level');
        $pokemon->img=$img;
        $pokemon->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        //
        return view('pokemon/show', compact("pokemon"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokemon = Pokemon::find($id);
        return view("pokemon/edit", compact($pokemon));
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $img = Storage::disk("public")->put("", $request->file('img'));
        $pokemon = new Pokemon();
        $pokemon->type_id=$request->input("type_id");
        $pokemon ->name=$request->input("name");
        $pokemon->level=$request->input('level');
        $pokemon->img=$img;
        $pokemon->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pokemon =Pokemon::find($id);
        $pokemon->delete();
        return redirect()->back();
        //

    }
}
