<?php

namespace App\Http\Controllers\adminAuth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;
use Mail;

class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    protected function guard(){
    
        return Auth()->guard('admin');
    
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return IlluminateContractsValidationValidator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'dob'  => 'required|numeric',
            'ph'  =>  'required||integer'
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'dob'=>$data['dob'],
            'ph'=>$data['ph'],
        ]);
    }
    public function register(Request $request) {
      $input = $request->all();
      $validator = $this->validator($input);

      if ($validator->passes()){
        $user = $this->create($input)->toArray();
        $user['link'] = str_random(30);

        DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);

        Mail::send('emails.activation', $user, function($message) use ($user){
          $message->to($user['email']);
          $message->subject('www.kunnec.com - Activation Code');
        });
        return redirect()->to('login')->with('success',"We sent activation code. Please check your mail.");
      }
      return back()->with('errors',$validator->errors());
    }
    public function userActivation($token){
      $check = DB::table('user_activations')->where('token',$token)->first();
      if(!is_null($check)){
        $user = User::find($check->id_user);
        if ($user->is_activated ==1){
          return redirect()->to('login')->with('success',"user are already actived.");

        }
        $user->update(['is_activated' => 1]);
        DB::table('user_activations')->where('token',$token)->delete();
        return redirect()->to('login')->with('success',"user active successfully.");
      }
      return redirect()->to('login')->with('Warning',"your token is invalid");
    }
}