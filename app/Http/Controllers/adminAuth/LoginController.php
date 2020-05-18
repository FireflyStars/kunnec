<?php

namespace App\Http\Controllers\adminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     use AuthenticatesUsers;
     
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm() {

        return view('admin.login'); // returining ..
    
    }

    public function test(Request $request){
       
       return $request;

    }

    protected function guard(){
    
        return Auth()->guard('admin');
    
    }
}
