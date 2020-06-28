<?php

namespace App\Http\Controllers\backEnd\items;

use App\Http\Controllers\Controller;
use App\model\Category as ModelCategory;
use App\model\Item as Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class itemsController extends Controller
{
    //All items
    public function index(){
        $items = Item::get()->where('visiable', '=', 0);       // allowd Items
        $hiddenItem = Item::get()->where('visiable', '=', 1);  // hidden Items
        $category =  ModelCategory::get();
        return view('admin.items.items',['category'=> $category, 'items' => $items,'hiddenItem'=> $hiddenItem]);
    }
    // Product page
    public function product($id){

        $item = item::find($id);
        $category_id = $item->category_id;
        $category = ModelCategory::find($category_id);
        return view('admin.items.product',['item'=> $item,'category'=>$category]);
    }

    public function add(){ // add form

        $categories =  ModelCategory::get();

        return view('admin.items.newItems',['categories'=>$categories]);
    }

    public function save(Request $request){  // insert into database

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'price' => 'required',
            'photo' => 'required',
            'category_id' => 'required',
        ]);
if($validator->fails()){
    return redirect('admin/items/add')->with(['error' => 'Your item did not added']);
}
            $extension = $request->photos->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $path = 'images/backEnd/items/';
            $fullPhoto = $path.$fileName;
            $request->photos ->move($path,$fileName);

            Item::create([
                'name' => $request->name,
                'discription'=> $request->discription,
                'price'=> $request->price,
                'photo'=> $fullPhoto,
                'category_id'=> $request->category ,
            ]);
            return redirect('admin/items/add')->with(['added' => 'Your item Adedd succesesfully']);
    }
    // items of any categoty
    public function spcial($name,$id){
        $category = ModelCategory::get();
        $url =  $_SERVER['REQUEST_URI'];
        // every item has this category id
        $items = Item::get()->where('category_id',$id);
        return view('admin.items.spcial',['items'=> $items, 'category'=> $category,'url'=>$url]);
    }
    // disable  item
    public function disable($id){
        $item = Item::find($id);
        $item->update([
            'visiable'=> 1,
        ]);
        return redirect()->back();
    }
    // Enable item
    public function enable($id){
        $item = Item::find($id);
        $item->update([
            'visiable'=> 0,
        ]);
        return redirect()->back();
    }
    // Delete from items page  {Delete button}
    public function delete($id){
        $del = Item::find($id);
        $del->delete();
    }
    // show Disabled Items
    public function disabledItem(){

        $items = Item::get()->where('visiable', '=', 1);       // hidden Items
        $category =  ModelCategory::get();
        return view('admin.items.disabled',['category'=> $category, 'items' => $items,]);
    }
}
