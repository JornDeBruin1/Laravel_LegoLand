<?php

namespace App\Http\Controllers;

use App\Models\Accomodaties;
use App\Models\Reservering;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class ReserveringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            $allReservations = Reservering::all();
            $reservationCheck = false;
            foreach($allReservations as $reservation){
                $startDate = Carbon::createFromFormat('Y-m-d', $reservation->aankomst_datum);
                $endDate = Carbon::createFromFormat('Y-m-d', $reservation->vertrek_datum);
                $checkStartDate = Carbon::createFromFormat('Y-m-d', $request->input('aankomst'));
                $checkEndDate = Carbon::createFromFormat('Y-m-d',$request->input('vertrek'));
                if($checkStartDate->between($startDate, $endDate) == true){
                    $reservationCheck = true;
                }
                if($checkEndDate->between($startDate, $endDate) == true){
                    $reservationCheck = true;
                }
            }
            
            // dd($reservationCheck);
            if($reservationCheck == true){
                return redirect()->route('accomodaties')->with('error', 'Deze datum is al bezet, kies een andere datum.');
            }
            
            
            $reservering = new Reservering();
            $reservering->accomodatie_id =  $request->input('accomodatie');
            $reservering->aantal_personen = $request->input('personen');
            $reservering->aankomst_datum = $request->input('aankomst');
            $reservering->vertrek_datum = $request->input('vertrek');
            $reservering->save();
            return redirect()->route('accomodaties')->with('bericht', 'Bedankt voor uw reservering, u krijgt zo spoedig mogelijk een mail van ons');  
        }
        catch(Exception $e){
            return redirect()->route('accomodaties')->with('error', 'Vul alle velden in.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservering $reservering)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservering $reservering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservering $reservering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservering $reservering)
    {
        //
    }
}