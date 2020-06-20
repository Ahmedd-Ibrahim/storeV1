<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\User as AppUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //

    public function index(){


        return view('index');
    }
    public function category(){
        return view('layouts\category');
    }
    public function collection(){
        return view('layouts\collection');
    }
    public function product(){
        return view('layouts\product');
    }
}
