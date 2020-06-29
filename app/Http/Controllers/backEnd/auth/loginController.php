<?php

namespace App\Http\Controllers\backEnd\auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\isAdmin as isAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function index(){
        if(!Auth::guest()){
            return redirect('admin/index')->with(['notAllowed'=> 'You can\'t Vist login page untill You logout']);
        } else{
            return view('auth/login');
        }
    }
}
