<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Food;


class HomeController extends Controller
{
    public function index(){
        $data=Food::all();
        return view("home",compact('data'));
    }
    public function redirects(){
        $data=Food::all();
        $usertype=Auth::user()->usertype;

        if($usertype==1){
            return view('admin.admin');
        }
        else{
            return view('home',compact('data'));
        }
    }
}
