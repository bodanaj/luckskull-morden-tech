<?php

namespace App\Http\Controllers;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Foundation\Providers\FormRequestServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


/**
 * Class UserController

 * @package App\Http\Controllers
 */
use DB;
use Mail;
use Session;
use Module;
use App\Traits\AuthorizesResources;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    
    }


    public function signup()
    {
        return view('auth.signup');
    }
      

    public function customSignup(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return Redirect::to("dashboard")->withSuccess('Successfully logged-in!');
    }


    public function createUser(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboardView()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
        return Redirect::to("login")->withSuccess('Access is not permitted');
    }
    

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
