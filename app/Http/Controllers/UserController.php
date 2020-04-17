<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user=User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', compact('user'));
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
            'name'=> 'required|',
            'role_id'=> 'required|',
            'photo'=> 'required|',
            'email'=>'required',
            'password'=>'required',
        ]);
            
    
            $user= new User();
            $image = Storage::disk('public')->put('', $request->file('photo'));
            $user->name=$request->name;
            $user->role_id=$request->role_id;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->photo = $image;
            $user->save();
            return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $team
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user=User::all();
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {       
        $request->validate([
                'name'=> 'required|',
                'role_id'=> 'required|',
                'photo'=> 'required|',
                'email'=>'required',
                'password'=>'required',
    ]);
       
        
            $image = Storage::disk('public')->put('', $request->file('photo'));
            $user->name=$request->name;
            $user->role_id=$request->role_id;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->photo = $image;
            $user->save();
            return redirect()->route('user.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $team
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(User $user)
    {
           if (Storage::exists($user->photo)) {
            Storage::disk('public')->delete($user->photo);
        } 
        $user->delete();
        return redirect()->route('user.index');
    }
    public function search(Request $request){
        $searchUser = $request->input('search');
        $user = User::where('id','>',1)->where('name','LIKE', '%'.$searchUser.'%')->get();
       

        return view('user.index',compact('user','searchUser'));
    }
}
