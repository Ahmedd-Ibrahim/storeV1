<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User as User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

class membersController extends Controller
{
    //
    public function index(){

        $users = User::get()->where('user_group',0);


        return view('admin.members',['users'=>$users]);
    }
//#################### edit Member ##################
     public function edit($member_id){

        $findUser = User::find($member_id);

        if(!$findUser){

            return redirect('admin/members');
        }

        return view('admin.editMember',['findUser' =>$findUser]);
    }

//#################### update Member ##################

    public function update(Request $request,$member_id){
        $user = User::find($member_id);
        $request->validate([
            'name' => 'required |min:9 ',
            'email' => 'sometimes|required|email|unique:users,email,'. $member_id,
            'phone' => 'required | unique:users,phone,'.$member_id ,
            'password'=>'reqired',
        ]);
        if(!$user ){
            return redirect()->back();
        } else{
            $user->update([
                'name'       => $request->name,
                'email'      => $request->email,
                'phone'      => $request->phone,
                'password'   => Hash::make($request->newPassword),
            ]);
            return redirect()->back()->with(['updated'=>'Your information have been updated']);
}

}

//#################### delete Member ##################
    public function delete($member_id){

        $del = User::find($member_id) ;
        if(! $del){
            return redirect('admin/members');
        }
        $del->delete();
        return redirect('admin/members');
    }

}
