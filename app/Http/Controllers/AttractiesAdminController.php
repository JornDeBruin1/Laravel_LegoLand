<?php

namespace App\Http\Controllers;

use App\Models\Attracties;
use Exception;
use Illuminate\Http\Request;

class AttractiesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attractiesAdmin = Attracties::all();
        return view('attractiesAdmin', [
            'attractie' => $attractiesAdmin
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
        try {
            $this->validate($request, [
                'image' => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
            ]);
            
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('images', $imageName);
    
            $attractie = new Attracties();
            $attractie->title = $request->input('title');
            $attractie->description = $request->input('description');
            $attractie->duration = $request->input('duration');
            $attractie->min_height = $request->input('min_height');
            $attractie->height = $request->input('height');
            $attractie->image_path = '/storage/app/images/' . $imageName;
            
            $attractie->save();
    
            return redirect()->route('attracties')->with('bericht', 'Attractie toegevoegd met succes!');
        } catch(Exception $e) {
            return redirect()->route('attracties')->with('error', 'Er is iets misgegaan bij het toevoegen van de attractie');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Attracties $attractie)
    {
        // dd($attractie);
        return view('attractiesEdit', [
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
    public function update(Request $request, Attracties $attractie)
    {
        try {
            $this->validate($request, [
                'image' => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('images', $imageName);
    
            $attractie->title = $request->input('title');
            $attractie->description = $request->input('description');
            $attractie->duration = $request->input('duration');
            $attractie->min_height = $request->input('min_height');
            $attractie->height = $request->input('height');
            $attractie->image_path = '/storage/app/images/' . $imageName;
    
            $attractie->update();
    
            return redirect()->route('attracties')->with('bericht', 'Attractie geupdate!');
        } catch(Exception $e) {
            return redirect()->route('attracties')->with('error', 'Er is iets misgegaan bij het update van de attractie');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attracties $attractie)
    {
        $attractie->delete();
        return redirect()->route('attracties')->with('bericht', 'Attractie verwijderd!');
    }
}