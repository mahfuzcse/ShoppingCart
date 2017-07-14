<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class homeController extends Controller
{
    public function index1(){
    
    	return view('welcome');

    }

     public function index(){
    
        return view('shop.index');

    }
}

