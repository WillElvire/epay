<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function userRegister()
    {
    	$users = User::where(['validation' => 1,'role_id' => 2])->paginate(5);
        
    	return view('administrator.inscrit',compact('users'));
    }
}
