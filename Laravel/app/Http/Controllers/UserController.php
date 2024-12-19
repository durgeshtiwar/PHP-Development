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
        return $request;
    }
}
