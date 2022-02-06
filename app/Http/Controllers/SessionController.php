<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if(auth()->attempt(request(['email', 'password']))==false){
            return back()->withErrors(['message'=>'Error in mail or password, please try again']);
        }
        return redirect()->to('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }



}
