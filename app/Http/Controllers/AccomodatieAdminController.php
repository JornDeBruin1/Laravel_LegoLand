<?php

namespace App\Http\Controllers;

use App\Models\AccomodatieAdmin;
use App\Models\Accomodaties;
use Exception;
use Illuminate\Http\Request;

class AccomodatieAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodatiesAdmin = Accomodaties::all();
        return view('accomodatiesAdmin', [
            'accomodatiesAdmin' => $accomodatiesAdmin
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
            $accomodatie = new Accomodaties();
            // Set other properties
            $accomodatie->verblijf = $request->input('naam');
            $accomodatie->aantal_slaapkamers = $request->input('slaapkamer');
            $accomodatie->aantal_badkamers = $request->input('badkamer');
            $accomodatie->prijs = $request->input('prijs');
            $accomodatie->image_path = '/storage/app/images/' . $imageName;
            
            // Save the accomodatie
            $accomodatie->save();
            
            return redirect()->route('accomodaties')->with('bericht', 'Accommodatie toegevoegd met succes!');
        }
        catch(Exception $e){
            return redirect()->route('accomodaties')->with('error', 'Er is iets misgegaan bij het toevoegen van de accommodatie');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Accomodaties $accomodatie)
    {
        // dd($accomodatie);
        // $accomodatieEdit = Accomodaties::all();
        return view('accomodatiesEdit',[
            'accomodatieEdit' => $accomodatie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccomodatieAdmin $accomodatieAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accomodaties $accomodatie)
    {
        try{
            $this->validate($request,[
                'image' => 'required|image|mimes:png,jpg,jpeg,gif,webp|max:2048',
            ]);
            
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('images', $imageName);
           
         
            // Set other properties
            $accomodatie->verblijf = $request->input('naam');
            $accomodatie->aantal_slaapkamers = $request->input('slaapkamer');
            $accomodatie->aantal_badkamers = $request->input('badkamer');
            $accomodatie->prijs = $request->input('prijs');
            $accomodatie->image_path = '/storage/app/images/' . $imageName;
            
            // Update the accomodatie
            $accomodatie->update();
            
            return redirect()->route('accomodaties')->with('bericht', 'Accommodatie geupdate!');
        }
        catch(Exception $e){
            return redirect()->route('accomodaties')->with('error', 'Er is iets misgegaan bij het update van de accommodatie');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accomodaties $accomodatie)
    {
        $accomodatie->delete();
        return redirect()->route('accomodaties')->with('bericht', 'Accommodatie verwijderd!');
    }
}