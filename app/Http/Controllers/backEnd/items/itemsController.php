<?php

namespace App\Http\Controllers\backEnd\items;

use App\Http\Controllers\Controller;
use App\model\Category as ModelCategory;
use App\model\Item as Item;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class itemsController extends Controller
{
    //All items
    public function index(){
        $items = Item::get();
        $category =  ModelCategory::get();
        return view('admin.items.items',['category'=> $category, 'items' => $items]);
    }
    // Product page
    public function product(){

        return view('admin.items.product');
    }

    public function add(){ // add form

        $categories =  ModelCategory::get();

        return view('admin.items.newItems',['categories'=>$categories]);
    }

    public function save(Request $request){  // insert into database

        $extension = $request->photos->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $path = 'images/backEnd/items/';
        $fullPhoto = $path.$fileName;
        $request->photos ->move($path,$fileName);
      $create =   Item::create([
            'name' => $request->name,
            'discription'=> $request->discription,
            'price'=> $request->price,
            'photo'=> $fullPhoto,
            'category_id'=> $request->category ,
        ]);
        return redirect('admin/items/add')->with(['added' => 'Your item Adedd succesesfully']);
    }
    // scpial group of items
    public function spcial($name,$id){
        $category = ModelCategory::get();
        $url =  $_SERVER['REQUEST_URI'];
        // every item has this category id

        $items = Item::get()->where('category_id',$id);

        return view('admin.items.spcial',['items'=> $items, 'category'=> $category,'url'=>$url]);
    }
}
