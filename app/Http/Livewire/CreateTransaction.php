<?php

namespace App\Http\Livewire;

use App\Models\Trasaction;
use App\Models\Money;
use App\Models\User;
use Livewire\Component;

class CreateTransaction extends Component
{
	public $money=0,$type_of_transaction,$val = false,$investment = 0;
	protected $rules =['money' => 'required','type_of_transaction' => 'required'];
	protected $week1=[50,100,150,200,370,1000];
	protected $payday=0;
	public function storeTransaction()
	{
		$this->validate();
		if(in_array($this->money,$this->week1)):
			$this->payday=new \DateTime(" +1 week");
		else:
			$this->payday=new \DateTime(" +2 week ");		
		endif;
		Trasaction::create(
			['money' => $this->money*540,
			'payment_type' => $this->type_of_transaction,
			'user_id' => auth()->user()->id,
			'motant_a_recevoir'=>$this->getRsi($this->money)*500,
			'retour_sur_investissement'=>$this->getRsi($this->money),
			'date_de_reception_de_fond'=>$this->payday,
			'pack' => $this->money]);
		User::Where('id',auth()->user()->id)->update(['verification' => 1]);

		if(Money::whereUserId(auth()->user()->id)->first()==null):
			 Money::whereUserId(auth()->user()->id)->create([
				'money_investit'=>$this->money*540,
				'date_de_retour'=>$this->payday,
				'montant_a_recevoir'=>$this->getRsi($this->money)*500,
				'money_actual'=>0,
				'user_id'=>auth()->user()->id,
				'name'=>auth()->user()->firstname,
			]);
		endif;
		$this->money = '';
		$this->type_of_transaction = '';
		session()->flash('success','Votre de demande de transaction a été prise en compte nous vous contacterons');
		return back();
	}
	public function getRsi($montant){

		$received=0;
		switch ($montant) {
			case 50:
				$received=91;
				break;
			case 100:
				$received=181;
				break;
			case 150 :
				$received=275;
				break;
			case 200 :
					$received=362;
					break;
			case 370 :
				$received=650;
				break;
			case 1000 :
				$received=1540;
				break;
			case 2000 :
				$received=3270;
				break;
			case 4000 :
				$received=5841;
				break;
			case 10000 :
				$received=13501;
				break;
			default:
				$received=0;
				break;
		}
		return $received;
	}
    public function render()
    {
		
        return view('livewire.create-transaction');
    }
}
