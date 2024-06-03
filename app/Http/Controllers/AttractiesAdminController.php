<?php

namespace App\Http\Controllers;

use App\Models\Attracties;
use Illuminate\Http\Request;

class AttractiesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('attractiesAdmin');
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
    public function show(Attracties $attractie)
    {
        return view('attractiesAdmin', [
            'attractie' => $attractie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attracties $attracties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attracties $attracties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attracties $attracties)
    {
        //
    }
}
