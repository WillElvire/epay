<?php

namespace App\Http\Livewire;

use App\Models\Retrait;
use App\Models\Money;
use Livewire\Component;

class CreateRetrait extends Component
{

	public $money,$payement_type,$number_of_payement;
	protected $myMoney;
	public $money_information;
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
		$this->myMoney=Money::whereUser_id(Auth()->user()->id)->first();
		if(Money::whereUser_id(Auth()->user()->id)->first()!=null):

			if($this->myMoney->montant_a_recevoir>=$this->money*500):			
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
			else:
                $this->resetInput();
				session()->flash('danger',"vous n'avez pas assez de fonds");
				return back();

			endif;

		else:
		    $this->resetInput();
			session()->flash('danger',"vous n'avez pas assez de fonds");
			return back();
		endif;
	}
    public function render()
    {	
		$this->money_information=Money::whereUserId(Auth()->user()->id)->first();
        return view('livewire.create-retrait');
    }
}
