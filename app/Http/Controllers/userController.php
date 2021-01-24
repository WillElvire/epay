<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
   public function confirmUserAccount(string $user)
    {
    	$data = User::firstWhere('user_code',$user);
    	if (!empty($data)) {
    		if ($data->validation != 1 && $data->verification != 1) {
    			$data->update(['validation' => 1]);
    			session()->flash('good','votre compte a été valider vous pouvez passer a l\'investissement');
    			return redirect('/confirmation');
    		}

    		if ($data->validation == 1 && $data->verification != 1) {
    			session()->flash('good',"votre compte a été déja activé,commencer l'investissement");
    			return redirect('/confirmation');
    		}
             
    		return redirect('pages/register');
    	}
    }
}
