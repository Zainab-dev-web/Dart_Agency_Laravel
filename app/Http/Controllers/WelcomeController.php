<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Service;
use App\Team;
use App\Testi;
use App\Project;
use App\Contact;
use App\User;
use App\Role;
use App\Icone;
class WelcomeController extends Controller
{
    public function index(){
        $header=Header::all();
        $service=Service::all();
        $team=Team::all();
        $testi=Testi::all();
        $project=Project::all();
        $contact=Contact::all();
        $icones=Icone::all();
        $user=User::inRandomOrder()->take(4)->get();
        $role=Role::all();
        return view('welcome', compact('header', 'service', 'icones','team' , 'testi','project', 'contact', 'user','role'));
    }
}
