<?php

namespace App\Http\Controllers;

use App\Icone;
use Illuminate\Http\Request;

class IconeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icones=Icone::all();
        return view('icone.index', compact('icones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Icone  $icone
     * @return \Illuminate\Http\Response
     */
    public function show(Icone $icone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Icone  $icone
     * @return \Illuminate\Http\Response
     */
    public function edit(Icone $icone)
    {
        return view('icone.edit', compact('icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Icone  $icone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Icone $icone)
    {
        $request->validate([
            'icone'=> 'required|',
            
        ]);
        
        $icone->icone=$request->icone;
        $icone->save();
        return redirect()->route('icone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Icone  $icone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icone $icone)
    {
        //
    }
}
