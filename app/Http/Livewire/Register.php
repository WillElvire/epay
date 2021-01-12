<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{



	public  $firstname,$lastname,$email,$password,$password_confirm,$sexe,$country,$user_code;
    public function render()
    {
        return view('livewire.register');
    }
}
