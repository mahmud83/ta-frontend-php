<?php

namespace App\Http\Controllers\Auth;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    // protected function credentials(Request $request)
    // {
    //     $field = $this->field($request);

    //     return [
    //         $field => $request->get($this->email()),
    //         'password' => $request->get('password'),
    //     ];
    // }
    // public function field(Request $request)
    // {
    //     $email = $this->email();

    //     return filter_var($request->get($email), FILTER_VALIDATE_EMAIL) ? $email : 'email';
    // }

    // protected function validateLogin(Request $request)
    // {
    //     $field = $this->field($request);

    //     $messages = ["{$this->email()}.exists" => 'The account you are trying to login is not activated or it has been disabled.'];

    //     $this->validate($request, [
    //         $this->email() => "required|exists:users,{$field},active,",
    //         'password' => 'required',
    //     ], $messages);
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
    // public function index(){
    //     return view('auth.login');
    // }
}
