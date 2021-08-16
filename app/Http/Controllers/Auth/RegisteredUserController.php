<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    
    public function create()
    {
        return view('auth.register');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'surname' => 'required|max:255',
            'othername' => 'string|max:255',
            'appNumber' => 'required|integer',
            'indexnum' => 'required|integer',
            'dob' => 'required',
            'contact' => 'required|integer',
            'region' => 'required|string|max:255',
            'year' => 'required|integer',
            'level' => 'required|integer',
            'programme' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'hall' => 'required|string|max:255',
            'fName' => 'required|string|max:255',
            'mName' => 'required|string|max:255',
            'fNumber' => 'required|integer',
            'mNumber' => 'required|integer',
            'pic' => 'strring',
            'sponsorname' => 'string|max:255',
            'sponsor_add' => 'string|max:255',
            'sponsor_contact' => 'integer',
            'sponsor_email' => 'string|email'
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'surname'=> $request->surname,
            'othername' => $request->othername,
            'appNumber' => $request->appNumber,
            'indexnum' => $request->indexnum,
            'dob' => $request->dob,
            'contact' => $request->contact,
            'region' => $request->region,
            'year' => $request->year,
            'level' => $request->level,
            'programme' => $request->programme,
            'department' => $request->department,
            'hall' => $request->hall,
            'fName' => $request->fName,
            'mName' => $request->mName,
            'fNumber' => $request->fNumber,
            'mNumber' => $request->mNumber,
            'pic' => $request->pic,
            'sponsorname' => $request->sponsorname,
            'sponsor_add' => $request->sponsor_add,
            'sponsor_contact' => $request->sponsor_contact,
            'sponsor_email' => $request->spoonsor_email,
        ]));


        $user->attachRole('student');
        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
