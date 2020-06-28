<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    //
  protected  $table = "item";
  protected $fillable  = ['name', 'discription','price','photo','category_id'];
  public function items_belongs_to_category(){
      return $this->belongsTo('app\model\category','items_id','id');
  }
}
