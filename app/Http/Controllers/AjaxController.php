<?php

namespace App\Http\Controllers;

use App\Ajax as Ajaxmodel;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function index(){

        // $user = userModel::find(1);

        // $category = $user ->categories;
        // return $category;
      return  view('ajaxTest');
    }
    public function save(request $request){

       $created =  Ajaxmodel::create([
            'name'           => $request->name,
            'discription'   => $request->discription,
        ]);


        if($created)
           return response()->json([
               'status'=> true,
               'msg'=>   'Your requst done',
           ]);

           else

           return response()->json([
               'status' =>  false,
               'msg'    => 'Your request did not work',
           ]);


    }
}
