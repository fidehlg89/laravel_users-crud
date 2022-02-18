<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Client;
use App\Models\Shipment;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $headers = ['Cliente', 'Carnet de Identidad', 'Telefono', 'Direccion', 'Municipio', 'Provincia', ''];
        $search_text=$request->get('search-text');

        //Search text if null returns all clients 
        $clients=Client::where(function ($query) use ($search_text) {
            return $query->where('name', 'Like', '%'.$search_text.'%')
            ->orWhere('app', 'Like', '%'.$search_text.'%')
            ->orWhere('ci', 'Like', '%'.$search_text.'%')
            ->orWhere('address', 'Like', '%'.$search_text.'%');
        })->paginate(10);
        return view('clientes.index', compact('clients', 'search_text', 'headers'));

        //Add filter by state or city, valorar
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::all();

        $states=State::all();
        return view('clientes.create', compact('states', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client=new Client;

        $client->name=$request->input('name');
        $client->app=$request->input('app');
        $client->ci=$request->input('ci');
        $client->phone=$request->input('phone');
        $client->address=$request->input('address');
        $client->city_id=$request->input('city');

        $client->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=Client::findOrFail($id);
        return view('clientes.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client=Client::findOrFail($id);
        $client->name=$request->input('name');
        $client->app=$request->input('app');
        $client->ci=$request->input('ci');
        $client->phone=$request->input('phone');
        $client->address=$request->input('address');
        $client->city_id=$request->input('city');

        $client->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::findOrFail($id);
        $shipments=Shipment::where('client_id','=',$id)->get();
        foreach ($shipments as $shipment) {            
            $shipment->delete();
        }
        $client->delete();
        return redirect()->route('clientes.index');
    }
}
