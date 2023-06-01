<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Campuses;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Hash;
use Redirect;
use Session;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function list(){

        $getAllCourses = Course::get()->toArray();
        return Inertia::render('Course/Index',[
            'campus'=>$getAllCourses
        ]);
    }

    public function create(REQUEST $request){
        $newCourse = new Course();
        $newCourse->name = $request->name;
        $newCourse->code = $request->code;
        $newCourse->funded = $request->funded;
        $result = $newCourse->save();
        if($result==1){
            return Redirect::route('courseList');
        }
        else return 0;
    }
}
