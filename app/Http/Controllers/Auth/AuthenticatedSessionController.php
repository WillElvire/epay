<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pages.auth');
    }
    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {

         $user = User::whereEmail($request->email
       
         )->first();
        
        if($user!=null and password_verify($request->password, $user->password) ):

                if ($user->role_id == 1) {
                    $req  = $request->authenticate();
                    $r = $request->session()->regenerate();
                    return redirect('/administrateur');
                }        
                $req  = $request->authenticate();
                $r = $request->session()->regenerate();
                return redirect('/utilisateur');

        else:

            return redirect('/login');

        endif;
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('pages.auth');
    }
}
