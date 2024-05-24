<?php

namespace App\Http\Controllers;

use App\Models\Accomodaties;
use Illuminate\Http\Request;

class AccomodatiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodatie = Accomodaties::all();
        return view('accomodaties', [
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Accomodaties $accomodaties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accomodaties $accomodaties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accomodaties $accomodaties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accomodaties $accomodaties)
    {
        //
    }
}