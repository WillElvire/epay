<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        



   	     User::create(
        	[
        		'firstname' => "DA",
        		'lastname'=> "SIE ROGER",
        		'email' => "dsieroger@gmail.com",
        		'password' => Hash::make('jesuisdev'),
        		'role_id' => 1,
        		'country' => "Abidjan",
        		'profit_avatar' => 'prfit.jpg',
        		 'user_code' => Str::random(20),
        		 'validation' => 1,
        		 'verification' => 1,
        		 'sexe' => "M",
        		 'phone' => "XXXXXXXX"
        		]);
    }
}
