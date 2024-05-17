<?php

namespace App\Http\Controllers;

use App\Models\AccomodatieBestel;
use App\Models\Accomodaties;
use Exception;
use Illuminate\Http\Request;

class AccomodatieBestelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodatie = Accomodaties::all();
        return view('accomodatiesBestel', [
            'accomodaties' => $accomodatie
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
    
}

/**
* Display the specified resource.
*/
public function show(Accomodaties $accomodatie)
{

    return view('accomodatiesBestel', [
        'accomodatie' => $accomodatie
    ]);
}

/**
* Show the form for editing the specified resource.
*/
public function edit(AccomodatieBestel $accomodatieBestel)
{
//
}

/**
* Update the specified resource in storage.
*/
public function update(Request $request, AccomodatieBestel $accomodatieBestel)
{
//
}

/**
* Remove the specified resource from storage.
*/
public function destroy(AccomodatieBestel $accomodatieBestel)
{
//
}
}