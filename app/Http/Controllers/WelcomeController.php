<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Service;
use App\Team;
use App\Testi;
use App\Contact;

class WelcomeController extends Controller
{
    public function index(){
        $header=Header::all();
        $service=Service::all();
        $team=Team::all();
        $testi=Testi::all();
        $contact=Contact::all();
        return view('welcome', compact('header', 'service', 'team' , 'testi', 'contact'));
    }
}
