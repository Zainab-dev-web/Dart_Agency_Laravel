<?php

namespace App\Http\Controllers;

use App\Testi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testi=Testi::all();
        return view('testi.index', compact('testi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testi.create', compact('testi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo'=> 'required|',
            'text'=> 'required|',
            'titre'=> 'required|',
            'name'=> 'required|',
        ]);
            

            $testi= new testi();
            $image = Storage::disk('public')->put('', $request->file('photo'));
            $testi->photo = $image;
            $testi->text=$request->text;
            $testi->titre=$request->titre;
            $testi->name=$request->name;
            $testi->save();
            return redirect()->route('testi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function show(Testi $testi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function edit(Testi $testi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testi $testi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testi $testi)
    {   {   if (Storage::exists($testi->photo)) {
        Storage::disk('public')->delete($testi->photo);
    } 
        $testi->delete();
        return redirect()->route('testi.index');
    }
}
