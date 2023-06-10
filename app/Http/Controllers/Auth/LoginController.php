<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth as Authenticable;

class LoginController extends Controller
{   

    public function redirectTo() {
        if(Authenticable::user()->role == 'admin') {
            $this->redirectTo = route('siswa.index', Authenticable::user()->siswa_id);
            return $this -> redirectTo;
        } else {
            $this->redirectTo = route('siswa.show', Authenticable::user()->siswa_id);
            return $this ->redirectTo;
        }
    }

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
