<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Category as ModelCategory;
use Category;

class indexController extends Controller
{
    //
    public function index(){
        $category = ModelCategory::get();
        return view('admin.index',['category'=>$category] );
    }

}
