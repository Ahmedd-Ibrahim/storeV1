<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\model\Category as ModelCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // show categories
    public function categories(){
        $category = ModelCategory::get();
        return view('admin.categories',['category'=>$category]);
    }

    // insert categories
    public function save(Request $request){
// valdete data before insert
// | string |unique:category,name'
$valedator = Validator::make($request->all(),[
    'name' => 'required | min:3 |unique:category,name',
]);
if($valedator -> fails()){


    return redirect()->back()->withErrors($valedator)->withInputs($request->all());
}
// insert data and redirect
ModelCategory::create([
    'name'           => $request->name,
    'discription'  => $request->discription,

]);
return redirect('admin/categories')->with(['added'=> 'success added Your Category']);

    }
// delete categories
public function delete($categories_id){

    $del = ModelCategory::find($categories_id);

    if(!$del){
        return redirect('admin/categories')->withErrors(['delete-error'=>'You trying to delete uknown categories']);
    }
    $del->delete();
    return redirect('admin/categories')->with(['success'=>'Success Deleted Category']);
}

######## Edit categories ######
public function edit($categories_id)
{

    $edit = ModelCategory::find($categories_id);

    if(!$edit){
        return redirect('admin/categories');
    }
  return view('admin.categoryEdit',['edit'=>$edit]);
}
############ update Categories ########

public function update(Request $request , $categories_id ){

$myCat = ModelCategory::find($categories_id);

if(!$myCat){
    return redirect()->back();
}
$myCat->update($request->all());

return redirect()->back()->with(['updated'=>'Your Category have been Updated']);
}
}
