<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{

    public $query;
    public $q = [];
	public function updatedQuery()
    {


            if(strlen($this->query)>=2)
            {
               	$this->q = User::where('firstname','LIKE','%'.$this->query.'%')
	               ->orWhere('lastname','LIKE','%'.$this->query.'%')
	               ->get();


    	
            }
    		


    }
    public function render()
    {
        return view('livewire.search');
    }
}
