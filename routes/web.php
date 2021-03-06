<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\historyController;
use App\Models\Retrait;
use App\Models\User;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/register',function(){
    return view('pages/register');
});


Route::get('/register/ref={id}',function($id){
    return view('pages/register')->withId($id);
});



Route::get('/confirmation/{token}',[userController::class,'confirmUserAccount'])->name('confirm.user.account');

Route::get('/pricing',function(){
     return view('pages/pricing');
});


Route::get('/auth',function(){
    return view('pages/auth');   
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';

Route::get('/confirmation', function() {
    
     return view('pages/confirmation');
});



Route::middleware('auth')->prefix('utilisateur')->group(function() {
    //
    Route::get('/', function () {
        return view('user/index');
    });
    Route::get('/lock',function(){
        return view('pages/blockus');
    }); 
    Route::get('/modify', function() {
        
         return view('user/modify');
    });

    Route::get('/profil', function () {
        
        return view('user/profil');
    })->name('user.profit');
    Route::get('/transaction', function () {
        
        return view('user/transaction');
    });

    Route::get('/withdrawall', function() {
        
        return view('user/retrait');
    });

    Route::get('/inbox', function () {
        
        return view('user/message');
    });


    Route::get('/history',[historyController::class,'render']);
    
    Route::get('/confirmation', function() {
        
        return view('user/confirmation');
    });
    
    
});

///////////////////////////// ADMINISTRATEUR //////////////////

Route::middleware('auth')->prefix('administrateur')->group(function() {
    //
    

    Route::get('/',[adminController::class,'index'])->name('admin.home');


    Route::get('/demandes',function(){
      return view('administrator.demande');
    })->name('admin.demande');

     Route::get('/demande',function(){
      $users = User::where('status',0)->paginate(10);
      return view('administrator.demande',compact("users"));
    })->name('admin.demande');

    

    Route::get('/demande/retraits/{id}',function($id){

      $retrait=Retrait::whereId($id)->first();
      $profil=User::whereId($retrait->user_id)->first();
      return view('administrator.confirmation',compact('retrait'),compact('profil'));

    });



      Route::get('/confirmer/{type}/{id}',function(string $type, string $id){
        $user = User::firstWhere('user_code',$id);
       if ($type == 'delete') {
          $users = User::where('user_code',$id)->delete();
          session()->flash('success',"Vous venez de supprimer la demande de $user->firstname");
         
       }
      $users = User::where('user_code',$id)->update(['status' => 1]);
      session()->flash('success',"Vous venez d'accepter la demande de $user->firstname");
      return back();
    })->name('demande');


     /*Route::get('/comptabilite',function(){
      return view('administrator.demande');
    })->name('admin.money');*/

      Route::get('/user/profil{id}',function($id){
       $user = User::with('money')->firstWhere('user_code',$id);
       $filleules = User::where('parrain_code',$id)->get();
       
      return view('administrator.profil',compact('user','filleules'));
    })->name('admin.user');

      Route::get('/search/user',function(){
      return view('administrator.search');
    })->name('admin.search');

      Route::get('delete/user/{id}',function(string $id){
        User::firstWhere('user_code',$id)->delete();
        session()->flash('success','Suppression avec succes de l\'utilisateur');
        return redirect('/administrateur/utilisateur/inscrits');
      })->name('admin.delete.user');

     Route::get('/demande/retraits',function(){

      $retraits = Retrait::with('user')->orderByDesc('created_at')->get();
      return view('administrator.retrait',compact('retraits'));
    })->name('admin.retrait');

    Route::get('/utilisateur/inscrits',[adminController::class,'userRegister'])->name('admin.register');
    
});



Route::get('user/logout',function(){
  session()->flush();
   session()->flash('success','vous etes deconnecté');
   return redirect('/auth');
})->name('user.logout');