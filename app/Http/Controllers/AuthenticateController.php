<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Campuses;
use Illuminate\Support\Facades\Auth;
use Hash;
use Redirect;
use Session;
use Illuminate\Support\Str;

class AuthenticateController extends Controller
{
    public function home(){
        return Inertia::render('Home',[
            'currentPage'=>'Home',
        ]);
    }

    public function signup(){
        $getAllCampuses = Campuses::get()->toArray();
        return Inertia::render('Auth/Signup',[
            'currentPage'=>'Signup',
            'campus'=> $getAllCampuses
        ]);
    }

    public function signin(){
        return Inertia::render('Auth/Signin',[
            'currentPage'=>'Signin',
        ]);
    }

    public function registerUser(REQUEST $request){
        $checkEmail = User::where('email',$request->email)->first();
        if($checkEmail) 
            return Redirect::route('signup')->with('error', 'Email already exist.');
        elseif($checkEmail === null)
        {
            $request['password']=Hash::make($request['password']);
            $user = new User();
            $user->email = $request->email;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->password = $request->password;
            $user->campusID = $request->campusID;
            $user->role = 1;
            $user->uuid = $this->createNewUuid();
            $data = $user->save();
            if($data==1){

                // $this->sendActivateEmail($request->email);
                // return Inertia::render('Auth/Login');
                return Redirect::route('signin');
            }
            else return 0;
        }
    
    }

    public function loginUser(REQUEST $request){
        $data=[];
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return Redirect::route('/');
        }
        else{
            return Redirect::back()->withErrors(['error' => 'Invalid Credentials']);
        }
    }

    public function createNewUuid() :string
    {
        return Str::uuid()->toString();
    }


    public function logout(){
        Auth::logout();
	    Session::flush();
        return redirect('/');
    }
    
}
