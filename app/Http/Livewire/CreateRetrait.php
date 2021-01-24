<?php

namespace App\Http\Livewire;

use App\Models\Retrait;
use Livewire\Component;

class CreateRetrait extends Component
{

	public $money,$payement_type,$number_of_payement;


	protected $rules  = 
	[
		'money' => 'required','payement_type' => 'required', 'number_of_payement' => 'required'
	];


	public function resetInput()
	{
		$this->money = null;
		$this->payement_type = null;
		$this->number_of_payement = null;
	}


	public function storeRetrait()
	{
		$data = $this->validate();
		Retrait::create([
			'money' => $this->money,
			'payement_type' => $this->payement_type,
			'number_of_payment' => $this->number_of_payement,
			'money' => $this->money,
			'user_id' => Auth()->user()->id,
		]);
		$this->resetInput();
		session()->flash('success','Votre demande de retrait a été prise en compte');
		return back();
	}

    public function render()
    {
        return view('livewire.create-retrait');
    }
}
