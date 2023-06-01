<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Campuses;
use Illuminate\Support\Facades\Auth;
use Hash;
use Redirect;
use Session;
use Illuminate\Support\Str;

class CampusController extends Controller
{
    public function list(){

        $getAllCampuses = Campuses::get()->toArray();
        return Inertia::render('Campus/Index',[
            'campus'=>$getAllCampuses
        ]);
    }

    public function create(REQUEST $request){
        $newCampus = new Campuses();
        $newCampus->name = $request->name;
        $newCampus->active = $request->active;
        $result = $newCampus->save();
        if($result==1){
            return Redirect::route('campusList');
        }
        else return 0;
    }
}
