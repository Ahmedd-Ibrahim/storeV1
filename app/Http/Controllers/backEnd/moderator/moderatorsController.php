<?php

namespace App\Http\Controllers\backEnd\moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User as User;
use Illuminate\Support\Facades\Hash;

class moderatorsController extends Controller
{
    //########### show moderators
    public function index(){

        $moderators  = User::get()->where('user_group',2);
        $admins    = User::get()->where('user_group',1);
        return view('admin.members.moderators',['moderators'=> $moderators,'admins'=> $admins]);
    }


//#################### edit moderators ##################

public function edit($moderator_id){

    $findMode = User::find($moderator_id);

    if(!$findMode){

        return redirect('admin/moderators');
    }

    return view('admin.members.editModerators',['findMode' =>$findMode]);
}

//#################### update moderators ##################

public function update(Request $request,$moderator_id){
    $moderator = User::find($moderator_id);
    $request->validate([
        'name' => 'required |min:9 ',
        'email' => 'sometimes|required|email|unique:users,email,'. $moderator_id,
        'phone' => 'required | unique:users,phone,'.$moderator_id ,
        'password'=>'reqired',
    ]);
    if(!$moderator ){
        return redirect()->back();
    } else{
        $moderator->update([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password'   => Hash::make($request->newPassword),
        ]);
        return redirect()->back()->with(['updated'=>'Your information have been updated']);
}

}

//#################### delete moderators ##################
public function delete($moderator_id){

    $del = User::find($moderator_id) ;
    if(! $del){
        return redirect('admin/moderator');
    }
    $del->delete();
    return redirect('admin/moderator');
}
}
