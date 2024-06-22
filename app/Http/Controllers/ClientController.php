<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AfficherListeClients()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
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
    public function AjouterClient(Request $request)
    {
        $request->validate([
            'NomClient' => 'required|max:20',
            'AdresseClient' => 'required',
            'TelClient' => 'required',
        ]);
 
        Client::create($request->all());
 
        return redirect()->action([ClientController::class, 'AfficherListeClients']);
    }
 

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function SupprimerClient($id)
    {
        Client::find($id)->delete();
 
        return redirect()->action([ClientController::class, 'AfficherListeClients']);
    }
 
}
