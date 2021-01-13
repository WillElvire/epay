<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

///////////////////////////////////////////////////////////////

Route::get('/', function () {
    return view('welcome');
});
///////////////////////////////////////////////////////////////////

Route::get('/', function () {
    return view('pages/index');
});
///////////////////////////////////////////////////////////////////

Route::get('/register',function(){
    return view('pages/register');
});
////////////////////////////////////////////////////////////////////
Route::get('/register/ref={id}',function($id){
    return view('pages/register')->withId($id);
});



Route::get('/confirmation/{token}',[userController::class,'confirmUserAccount'])->name('confirm.user.account');
////////////////////////////////////////////////////////////////////

Route::get('/pricing',function(){
     return view('pages/pricing');
});

///////////////////////////////////////////////////////////////////

Route::get('/auth',function(){
    return view('pages/auth');   
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/confirmation', function() {
    
     return view('pages/confirmation');
});



Route::group(['prefix' => 'utilisateur'], function() {
    //
    Route::get('/', function () {
        return view('user/index');
    });
    ////////////////////////////
    Route::get('/lock',function(){
        return view('pages/blockus');
    }); 
    ///////////////////////////   
    Route::get('/modify', function() {
        
         return view('user/modify');
    });
    ///////////////////////////
    Route::get('/profil', function () {
        
        return view('user/profil');
    });
    //////////////////////////
    Route::get('/transaction', function () {
        
        return view('user/transaction');
    });
    //////////////////////////
    Route::get('/withdrawall', function() {
        
        return view('user/retrait');
    });
    /////////////////////////
    Route::get('/inbox', function () {
        
        return view('user/message');
    });
    //////////////////////////
    
    Route::get('/confirmation', function() {
        
        return view('user/confirmation');
    });
    
    
});
