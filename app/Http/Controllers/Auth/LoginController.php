<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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

    use AuthenticatesUsers;
    protected $redirectTo;
    public function redirectTo()
    {
        switch (Auth::user()->role) {
        case 'admin':
            $this->redirectTo = '/admin';
        return $this->redirectTo;
        break;

        case 'user':
            $this->redirectTo = '/user';
        return $this->redirectTo;
        break;

        default:
        $this->redirectTo = '/login';
        return $this->redirectTo;
    }
    // return $next($request);
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
