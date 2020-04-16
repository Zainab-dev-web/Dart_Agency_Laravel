<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team=Team::all();
        $user=User::all();
        return view('team.index', compact('team', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create', compact('team'));
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
            'user_id'=> 'required|',
            'role_id'=> 'required|',
            'photo'=> 'required|',
        ]);
            
    
            $team= new Team();
            $image = Storage::disk('public')->put('', $request->file('photo'));
            $team->user_id=$request->user_id;
            $team->role_id=$request->role_id;
            $team->photo = $image;
            $team->save();
            return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $user=User::all();
        return view('team.edit', compact('team','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'user_id'=> 'required|',
            'role_id'=> 'required|',
            'photo'=> 'required|',
        ]);
        
            $image = Storage::disk('public')->put('', $request->file('photo'));
            $team->user_id=$request->user_id;
            $team->role_id=$request->role_id;
            $team->photo = $image;
            $team->save();
            return redirect()->route('team.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index');
    }
}
