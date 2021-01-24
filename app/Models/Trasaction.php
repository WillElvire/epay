<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trasaction extends Model
{
    use HasFactory;


    protected $fillable = [
    	'money','payment_type',
    	'user_id','pack',
    	'retour_sur_investissement'
    ];



    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
