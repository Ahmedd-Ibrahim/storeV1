<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = [
        'name', 'discription' ,
    ];

}
