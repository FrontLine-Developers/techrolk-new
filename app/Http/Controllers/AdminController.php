<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function dashboard (){
        $UStype=Auth::user()->UStype;

        if($UStype== "1"){
            return view('Admin.d');
    }
    else{
        return view("index");
    }
}
}