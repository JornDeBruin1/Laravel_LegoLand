<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $contact = new Contact();
            $contact->name = $request->input('naam');
            $contact->email = $request->input('email');
            $contact->subject = $request->input('onderwerp');
            $contact->message = $request->input('bericht');
            $contact->save();
            return redirect()->route('contact')->with('bericht', 'Bedankt voor uw bericht, we nemen zo snel mogelijk contact met u op.');  
        }
        catch(Exception $e){
            return redirect()->route('contact')->with('error', 'Vul alle velden in.');
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}