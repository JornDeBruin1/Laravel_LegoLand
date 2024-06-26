<?php

namespace App\Http\Controllers;

use App\Models\BestellingAdmin;
use App\Models\Tickets;
use Exception;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Ticket;

class BestellingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bestellingAdmin = Tickets::all();
        return view('bestellingAdmin', [
            'bestellingAdmin' => $bestellingAdmin
        ]);
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
            $this->validate($request,[
                'image' => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
            ]);
            
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('images', $imageName);
           
            // Create a new Accomodaties instance
            $tickets = new Tickets();
            // Set other properties
            $tickets->naam = $request->input('naam');
            $tickets->prijs = $request->input('prijs');
            $tickets->image_path = '/storage/app/images/' . $imageName;
            
            // Save the accomodatie
            $tickets->save();
            // dd($tickets);
            return redirect()->route('bestellingen')->with('bericht', 'ticket toegevoegd met succes!');
        }
        catch(Exception $e){
            // dd($e);
            return redirect()->route('bestellingen')->with('error', `Er is iets misgegaan bij het toevoegen van de ticket`);
            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tickets $ticket)
    {
        // dd($ticket);
        return view('bestellingEdit',[
            'bestellingEdit' => $ticket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BestellingAdmin $bestellingAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tickets $ticket)
    {
        try{
            $this->validate($request,[
                'image' => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
            ]);
            
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('images', $imageName);
           
         
            // Set other properties
            $ticket->naam = $request->input('naam');
            $ticket->prijs = $request->input('prijs');
            $ticket->image_path = '/storage/app/images/' . $imageName;
            
            // Update the ticket
            $ticket->update();
            
            return redirect()->route('bestellingen')->with('bericht', 'ticket geupdate!');
        }
        catch(Exception $e){
            return redirect()->route('bestellingen')->with('error', 'Er is iets misgegaan bij het update van de ticket');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tickets $ticket)
    {
        $ticket->delete();
        return redirect()->route('bestellingen')->with('bericht', 'tickets verwijderd!');
    }
}