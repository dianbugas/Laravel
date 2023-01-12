<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user_id;
    public $name;
    public $email;

    public function mount($user){
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.user-edit');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
        ]);

        User::where('id', $this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->name = NULL;
        $this->email = NULL;

        redirect()->route('users.index')->with('success', 'User Berhasil Diupdate');
    }
}
