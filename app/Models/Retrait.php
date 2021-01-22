<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retrait extends Model
{
    use HasFactory;

    protected $fillable = ['money','number_of_payment','user_id','payement_type'];


    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
