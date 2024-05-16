<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playstation;
use App\Models\Invent;

class PlaystationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $playstations = Playstation::all();
        $invents = Invent::all();

        return view('playstation.index', compact('playstations', 'invents'));
        
    }

    public function create()
    {
        return view('playstation.create');
    }

    public function createinvent()
    {
        return view('playstation.createinvent');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'device_type' => 'required',
            'device_name' => 'required',
            'device_model' => 'required',
        ]);

        Playstation::create($validatedData);

        return redirect()->route('playstation.index');
    }

    public function storeinvent(Request $request)
    {
        $validatedData = $request->validate([
            'device_name' => 'required',
            'device_model' => 'required',
            'device_type' => 'required',
        ]);

        Invent::create($validatedData);

        return redirect()->route('playstation.index');
    }

    public function edit(Playstation $playstation)
    {
        return view('playstation.edit', compact('playstation'));
    }

    public function editinvent(Invent $invent)
    {
        return view('playstation.editinvent', compact('invent'));
    }

    public function update(Request $request, Playstation $playstation)
    {
        $validatedData = $request->validate([
            'device_type' => 'required',
            'device_name' => 'required',
            'device_model' => 'required',
        ]);

        $playstation->update($validatedData);

        return redirect()->route('playstation.index');
    }

    public function updateinvent(Request $request, Invent $invent)
    {
        $validatedData = $request->validate([
            'device_name' => 'required',
            'device_model' => 'required',
            'device_type' => 'required',
        ]);

        $invent->update($validatedData);

        return redirect()->route('playstation.index');
    }

    public function destroy(Playstation $playstation)
    {
        $playstation->delete();

        return redirect()->route('playstation.index');
    }

    public function destroyinvent(Invent $invent)
    {
        $invent->delete();

        return redirect()->route('playstation.index');
    }

    public function show(Playstation $playstation)
    {
        // Logic to show a single resource
    }

}
