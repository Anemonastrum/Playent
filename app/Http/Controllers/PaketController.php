<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket; // Add this line to import the Paket model

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakets = Paket::all();
        return view('paket.index', compact('pakets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'paket_name' => 'required',
            'waktu' => 'required',
            'harga' => 'required',
        ]);

        Paket::create($validatedData);

        return redirect()->route('paket.index');
    }

    public function edit(Paket $paket)
    {
        return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, Paket $paket)
    {
        $validatedData = $request->validate([
            'paket_name' => 'required',
            'waktu' => 'required',
            'harga' => 'required',
        ]);

        $paket->update($validatedData);

        return redirect()->route('paket.index');
    }

    public function destroy(Paket $paket)
    {
        $paket->delete();

        return redirect()->route('paket.index');
    }
}
