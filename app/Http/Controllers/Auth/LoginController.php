<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers{ logout as originalLogout; }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/kensaku/home1';

    // public function redirectPath()
    // {
    //     return '/kensaku/home1';
    // }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function loggedOut(\Illuminate\Http\Request $request)
    {
        return redirect('/login');
    }


    protected function authenticated(Request $request, $user)
    {
        $user->logedIn_at = now();
        $user->save();
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->logOut_at = now();
        $user->save();

        return $this->originalLogout($request);
    }

}
