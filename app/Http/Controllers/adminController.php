<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trasaction;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function userRegister()
    {
    	$users = User::where(['status' => 1,'role_id' => 2])->paginate(5);
        
    	return view('administrator.inscrit',compact('users'));
    }


    public function index(){

        $inscrit=User::where(['status' => 1,'role_id' => 2])->get();
        $demande=User::whereStatus(0)->get();
        $revenu=Trasaction::sum('pack')*540;
         return view('administrator.index',compact('inscrit'),compact('demande'))->withRevenu($revenu);
    }
}
