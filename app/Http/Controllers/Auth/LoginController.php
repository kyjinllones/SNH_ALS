<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    // // @override
    // public function login(Request $req){
    //    if($req->email=='admin@gmail.com' && $req->password=='admin'){
    //       $req->session()->regenerate();
    //       //return redirect();
    //         // return redirect()->route('home');
        
    //    }
    //    $credentials=$req->only('email','password');
    //    $auth=Auth::attempt($credentials, $req->has('remember'));
    //    if($auth){
    //  //todo
    //      // return redirect()->intended($this->redirectPath());
    //    }
    //    //todo

      
    //    print($auth);
    // }
}
