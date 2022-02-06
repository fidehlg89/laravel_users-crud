<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users, $name, $email, $password;
    
    public function render()
    {
        $this->users = User::latest()->get();
        return view('livewire.users');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $this->name = '';
        $this->email = '';
        $this->password = '';

        session()->flash('message', 'Usuario creado satisfactoriamente');
    }
}
