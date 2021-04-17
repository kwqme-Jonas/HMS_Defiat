<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('student')){
            return view('student.records');
        }elseif(Auth::user()->hasRole('admin')){
            return view('admin.dashboard');
        }
    }
}
