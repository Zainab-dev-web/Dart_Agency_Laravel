<?php

namespace App\Http\Controllers;

use App\MailForm;
use Illuminate\Http\Request;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class MailFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'name'=> 'required|',
            'prenom'=> 'required|',
            'email'=> 'required|',
        ]);

        $mailForm= new MailForm();

        $mailForm->name = $request->input('name');
        $mailForm->prenom = $request->input('prenom');
        $mailForm->email = $request->input('email');
        $mailForm->save();
        Mail::to('zainabfahem96@gmail.com')->send(new NewsletterMail($mailForm));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MailForm  $mailForm
     * @return \Illuminate\Http\Response
     */
    public function show(MailForm $mailForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MailForm  $mailForm
     * @return \Illuminate\Http\Response
     */
    public function edit(MailForm $mailForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MailForm  $mailForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MailForm $mailForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MailForm  $mailForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(MailForm $mailForm)
    {
        //
    }
}
