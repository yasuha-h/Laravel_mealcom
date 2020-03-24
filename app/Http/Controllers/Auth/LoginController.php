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
    
    // AuthenticatesUsersのオーバーライド:ログインをe-mal or mealcom_id
    public function username()
    {
        return 'mealcom_id';
    }

    protected function attemptLogin(Request $request)
    {
        $username = $request->input($this->username());
        $password = $request->input('password');
        // メールアドレスかどうか判定
        if(false !== filter_var($username, FILTER_VALIDATE_EMAIL))
        {
            $credentials = ['email' => $username, 'password' => $password];
        }
        else
        {
            $credentials = [$this->username() => $username, 'password' => $password];
        }
        return $this->guard()->attempt(
            $credentials, $request->filled('remember')
        );
    }


}
