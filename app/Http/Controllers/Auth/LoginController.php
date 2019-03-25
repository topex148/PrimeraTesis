<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {

        if (auth()->user()->hasRole(['admin'])){
          return '/Plane';
        }

        if (auth()->user()->hasRole(['user'])){
          return '/Turista';
        }

        if (auth()->user()->hasRole(['prestador'])){
          return '/Itinerario';
        }

        if (auth()->user()->hasRole(['gerente'])){
          return '/Zona';
        }

        if (auth()->user()->hasRole(['promotor'])){
          return '/Atractivo';
        }

        if (auth()->user()->hasRole(['community'])){
          return '/Paquete';
        }

        return '/Paquete';
    }

    public function logout()
        {
            Auth::logout();

        return redirect('/inicio');
    }
}
