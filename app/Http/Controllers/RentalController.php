<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Playstation;
use App\Models\Paket;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::all();
        return view('rental.index', compact('rentals'));
    }

    public function create()
    {
        $playstations = Playstation::all(); // Ambil semua data PlayStation
        $pakets = Paket::all();
        return view('rental.create', compact('playstations', 'pakets')); // Kirim data ke view

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'nullable',
            'contact_number' => 'nullable',
            'playstation_id' => 'required',
            'paket_id' => 'required',
            // 'rental_duration' => 'required|integer|min:1',
        ]);
    
        Rental::create($validatedData);
    
        return redirect()->route('rental.index');
    }

    public function edit(Rental $rental)
    {
        $playstations = Playstation::all(); // Ambil semua data PlayStation
        $pakets = Paket::all();
        return view('rental.edit', compact('rental', 'playstations', 'pakets')); // Kirim data ke view
    }

    public function update(Request $request, Rental $rental)
    {
        $validatedData = $request->validate([
            'customer_name' => 'nullable',
            'contact_number' => 'nullable', // Tetap diperlukan, tetapi bisa kosong
            'playstation_id' => 'required',
            'paket_id' => 'required',
            // 'rental_duration' => 'required|integer|min:1',
        ]);

        $rental->update($validatedData);

        return redirect()->route('rental.index');
    }

    public function destroy(Rental $rental)
    {
        $rental->delete();

        return redirect()->route('rental.index');
    }


}

