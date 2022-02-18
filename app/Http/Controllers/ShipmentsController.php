<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Client;

class ShipmentsController extends Controller
{
    private $types = ['ENVIO', 'ENA'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $headers = ['Embarcador', 'BL', 'Destinatario', 'Municipio', 'Provincia', ''];
        $search_text=$request->get('search-text');

        //Search text if null returns all clients 
        $shipments=Shipment::where(function ($query) use ($search_text) {
            return $query->where('shipper', 'Like', '%'.$search_text.'%')
            ->orWhere('bl', 'Like', '%'.$search_text.'%');
        })->paginate(10);
        return view('envios.index', compact('shipments', 'search_text', 'headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Client $client)
    {
        $types=$this->types;
        $clients=Client::all();
        return view('envios.create', compact('types', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipment=new Shipment();

        $shipment->shipper=$request->input('shipper');
        $shipment->packages=$request->input('packages');
        $shipment->bl=$request->input('bl');
        $shipment->weight=$request->input('weight');
        $shipment->receipt=$request->input('receipt');
        $shipment->description=$request->input('description');
        $shipment->type=$request->input('type');
        $shipment->client_id=$request->input('client');

        $shipment->save();

        //return $shipment;

        return redirect()->route('envios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipment=Shipment::findOrFail($id);
        $types=$this->types;
        $clients=Client::all();
        return view('envios.edit', compact('types','shipment', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shipment=Shipment::findOrFail($id);
        $shipment->shipper=$request->input('shipper');
        $shipment->packages=$request->input('packages');
        $shipment->bl=$request->input('bl');
        $shipment->weight=$request->input('weight');
        $shipment->receipt=$request->input('receipt');
        $shipment->type=$request->input('type');
        $shipment->description=$request->input('description');

        $shipment->save();

        return redirect()->route('envios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipment=Shipment::findOrFail($id);
        $shipment->delete();
        return redirect()->route('envios.index');
    }
}
