<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


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


    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        try {

            $user = User::where('email',$request->username)->first();

            if (!$user) {
                return response()->json(['status' => 0,'msg'=>'Invalid Email Id']);
            }

            if (!Hash::check($request->password, $user->password)) {

                return response()->json(['status' => 0,'msg'=>'Invalid User  or Password']);
            }

 

            Auth::login($user);
            return response()->json(['status' => 1,'msg'=>'logged in successfully']);
        } 

        catch (\Exception $e) {
            return response()->json(['status' => 0,'msg'=>'Something Went Wrong','error'=>$e->getMessage()]);
        }

    }



    public function postRegister(Request $request)
    {   

        $this->validate($request,[

            'first_name'=>'required', 
            'last_name'=>'required', 
            'password'=>'required',
            'email'=>'required|unique:users',             


        ]);
        $user = new User ;
        $user->first_name = $request->first_name ;
        $user->last_name = $request->last_name ;            
        $user->password =  Hash::make($request->password);
        $user->email = $request->email ; 

        $user->save();


        return back()->with('success','Thank you for Registering with us');

    }


    public function logout()
    {

        Auth::logout(); 
        return redirect('/');

    } 



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
