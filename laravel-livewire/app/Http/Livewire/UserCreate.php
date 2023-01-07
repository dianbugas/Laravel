<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.user-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|nim:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        // User::create{[
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'password' => $this->password,
        // ]};

        session()->flash('success','User Berhasil Dibuat');
    }
}
