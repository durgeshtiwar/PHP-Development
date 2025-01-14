<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser()
    {
        return "Durgesh Tiwari";
    }
    function getName($name)
    {
        return view('home',['name'=>$name]);
    }
    function userHome()
    {
        $name = "Durgesh Pratp Tiawri";
        $users = ['Aditya','Lavlesh','Shubham'];
        return view('home',['name'=>$name,'users'=>$users]);
    }
    function userForm(request $request)
    { 
        $request->validate([
            'name'=>'required|min:3|max:10',
            'email'=>'required',
            'city'=>'required|uppercase'
        ],
        [
            'city.uppercase'=>'city should be in uppercase'
        ]
    );
        return $request;
    }
}
