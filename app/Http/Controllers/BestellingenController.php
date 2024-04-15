<?php

namespace App\Http\Controllers;

use App\Models\Bestellingen;
use App\Models\BestellingRegel;
use App\Models\Tickets;
use Illuminate\Http\Request;

class BestellingenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Tickets::all();
        return view('bestellingen' , ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $orders = Bestellingen::with('bestelling_regels.ticket')->get();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bestelling = new Bestellingen();
        // gegevens uit form
        $bestelling->achternaam = $request->input('achternaam');
        $bestelling->telefoonNummer = $request->input('telefoonnummer');
        $bestelling->email = $request->input('email');
        $bestelling->adres = $request->input('adres');
        $bestelling->save();
        return redirect()->route('bestellingen')->with('bericht', 'Bedankt voor uw Aankoop.');


        //todo loop door tickets
        foreach ($request->input('tickets') as $ticketID => $aantal) {
            $bestelling_regel = new BestellingRegel();
            $bestelling_regel->bestelling_id = $bestelling->id;
            $bestelling_regel->ticket_id = $ticketID;
            $bestelling_regel->aantal = $aantal;
            $bestelling_regel->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bestellingen $bestellingen)
    {
        //
    }
}