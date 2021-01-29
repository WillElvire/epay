<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;
    protected $fillable = ['name','money_investit','user_id','date_de_retour','montant_a_recevoir','money_actual'];
}
