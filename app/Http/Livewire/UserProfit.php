<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Money;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserProfit extends Component
{

	public $val = false;
	public $firstname,$lastname,$email,$password,$phone,$password_confirmation;
	public $money;
	
	public function showComponent()
	{
	    $this->val = true;
	    $this->firstname = auth()->user()->firstname;
	    $this->lastname = auth()->user()->lastname;
	    $this->email = auth()->user()->email;
	    $this->phone = auth()->user()->phone;
	}


	public function editUserInformation()
	{

        if ($this->password && $this->password == $this->password_confirmation) {
        	   User::firstWhere('id',auth()->user()->id)->update(
        		[
        			'firstname' => $this->firstname,
        			'lastname' => $this->lastname,
        			'email' => $this->email,
        			'phone' => $this->phone,
        			'password' => Hash::make($this->password),
        		]);
        	   session()->flash('success','Votre profil a été mit a jour');
        	   $this->val = false;
               return back();
        	   
           }
	           User::firstWhere('id',auth()->user()->id)->update(
	        		[
	        			'firstname' => $this->firstname,
	        			'lastname' => $this->lastname,
	        			'email' => $this->email,
	        			'phone' => $this->phone,
	        		]);
               session()->flash('success','Votre profit a été mit a jour');
	    	   $this->val = false;
	           return back();

		
	

	}
    public function render()
    {
		
		$this->money=Money::whereUserId(Auth()->user()->id)->first();
        return view('livewire.user-profit');
    }
}
