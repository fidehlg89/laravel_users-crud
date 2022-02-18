<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $headers = ['Nombre', 'Email', ''];
        $search_text=$request->get('search-text');

        //Search text if null returns all clients 
        $users=User::where(function ($query) use ($search_text) {
            return $query->where('name', 'Like', '%'.$search_text.'%')
            ->orWhere('email', 'Like', '%'.$search_text.'%');
        })->paginate(10);
        return view('users.index', compact('users', 'search_text', 'headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed'
        ]);
    
       $user=User::create(request(['name', 'email', 'password']));

       return redirect()->to(route('usuarios.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $current_password=$request->input('current_password');
        $new_password=$request->input('new_password');

        if ($current_password || $new_password){
            $request->validate([
                'current_password' => ['required', new MatchOldPassword($user->password)],
                'new_password' => ['required'],
                'new_confirm_password' => ['same:new_password'],
            ]);
            
            if (Hash::check($current_password, $user->password)) {            
                $user->password = $request->new_password;
            } 
        }        

        $user->name=$request->input('name');
        $user->email=$request->input('email');

        $user->save();

        //return back()->with('current_password', 'Current password does not match!');
        return redirect()->route('usuarios.index');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('usuarios.index');
    }
}
