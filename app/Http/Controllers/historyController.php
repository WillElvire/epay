<?php

namespace App\Http\Controllers;

use App\Models\Money;
use App\Models\Trasaction;
use Illuminate\Http\Request;

class historyController extends Controller
{
    //

    public function render(){

        $transaction=Trasaction::whereUserId(Auth()->user()->id)->paginate(10);
         return view('user/history')->withTransaction($transaction);
    }
}
