<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
   
    public function logged(){

     
        
        $user = Auth::user();
        
        return view('restricted',compact('user'));
        
    }

    public function guest(){

        
        return view('free');
        
    }
}
