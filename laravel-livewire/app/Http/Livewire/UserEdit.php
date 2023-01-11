<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserEdit extends Component
{
    public $name;
    public $email;

    public function mount($user){
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.user-edit');
    }
}
