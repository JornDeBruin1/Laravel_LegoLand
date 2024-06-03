<?php

namespace App\Http\Controllers;

use App\Models\Openingstijden;
use Illuminate\Http\Request;

class OpeningstijdenAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('openingstijdenAdmin');
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
    public function show(Openingstijden $openingstijden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Openingstijden $openingstijden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Openingstijden $openingstijden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Openingstijden $openingstijden)
    {
        //
    }
}