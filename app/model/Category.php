<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = [
        'id','name', 'discription' , 'visiblity','allow_ads','user_id',
    ];


    public function user(){
        return $this->belongsTo('App\User','category_id','id');
    }
    public function items(){
        return $this->hasMany('App\model\item','category_id','id');
    }

}
