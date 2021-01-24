<?php

namespace App\Http\Livewire;

use App\Models\Trasaction;
use App\Models\User;
use Livewire\Component;

class CreateTransaction extends Component
{


	public $money=0,$type_of_transaction,$val = false,$investment = 0;

	protected $rules =['money' => 'required','type_of_transaction' => 'required'];

	



	public function storeTransaction()
	{

		$this->validate();
		Trasaction::create(
			['money' => $this->money*540,
			'payment_type' => $this->type_of_transaction,
			'user_id' => auth()->user()->id,
			'pack' => $this->money]);

		User::Where('id',auth()->user()->id)->update(['verification' => 1]);

		$this->money = '';
		$this->type_of_transaction = '';
		session()->flash('success','Votre de demande de transaction a été prise en compte nous vous contacterons');
		return back();
	}
    public function render()
    {
        return view('livewire.create-transaction');
    }
}
