<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Redirect;
use Session;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function profile(){
        $user = Auth()->user()->id;
        $getUser = User::find($user)->first();
        return Inertia::render('Profile/Setting',[
            'currentPage'=>'Setting',
            'user'=>$getUser
        ]);
    }
    
}
