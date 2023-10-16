<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Mostrar una lista del recurso.
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        //
    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->input('name');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->save();

        return redirect()->back();
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Actualice el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, $id)
    {
        $client =  Client::find($id);
        $client->name = $request->input('name');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->update();

        return redirect()->back();
    }

    /**
     * Elimine el recurso especificado del almacenamiento.
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->back();
    }
}
