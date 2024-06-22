<?php

namespace App\Http\Controllers;

use App\Models\Sejour;
use Illuminate\Http\Request;

class SejourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AfficherListeSejour()
    {
        $sejours = Sejour::all();
        return view('sejour.index', compact('sejours'));
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
    public function show(Sejour $sejour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sejour $sejour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sejour $sejour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sejour $sejour)
    {
        //
    }
}
