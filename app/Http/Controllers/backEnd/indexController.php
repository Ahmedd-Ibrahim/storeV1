<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Category as ModelCategory;
use App\User as AppUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    //
    public function index(){
        $userNotVerified = User::all()->where('email_verified_at', null); // user not verified
        $user = User::all()->where('user_group',0);  // all users without admins
        $admins = User::all()->where('user_group',1); // all admins
        $category = ModelCategory::get(); // all categories
       return view('admin.index',['category'=>$category, 'user'=>$user , 'admins'=>$admins, 'userNotVerified'=>$userNotVerified] );

    }


}
