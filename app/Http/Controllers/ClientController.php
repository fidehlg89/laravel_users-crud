<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
        $search_text=$request->get('search-text');
        $clients=DB::table('client')->select('id', 'name', 'app', 'ci', 'address', 'phone')
                                    ->where('name', 'Like', '%'.$search_text.'%')
                                    ->orWhere('app', 'Like', '%'.$search_text.'%')
                                    ->orderBy('name', 'asc')
                                    ->paginate(4);
        return view('clientes.index', compact('clients', 'search_text'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
        $client->delete();
        return redirect()->route('clientes.index');
    }
}
