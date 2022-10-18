<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            return view('admin.dashboard');
        }

        elseif(Auth::user()->hasRole('teacher'))
        {
            return view('teacher.dashboard');
        }

        elseif(Auth::user()->hasRole('student'))
        {
            return view('student.dashboard');
        }
    }

    public function myprofile()
    {
        if(Auth::user()->hasRole('teacher'))
        {
            return view('teacher.myprofile');
        }
        elseif(Auth::user()->hasRole('student'))
        {
            return view('student.myprofile');
        }
        elseif(Auth::user()->hasRole('admin'))
        {
            return view('admin.myprofile');
        }
    }


    public function teachers()
    {
        $data = User::where('role_id', 'teacher')->get();
        return view('admin.teachers',['users'=>$data]);
    }

    public function students()
    {
        $data = User::where('role_id', 'student')->get();
        return view('admin.students',['users'=>$data]);
    }

    
    public function edit(){
        return view('admin.edit');
    }
}
