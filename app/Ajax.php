<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajax extends Model
{
    //
  protected  $table = 'ajax';
  protected $fillable = ['id','name','discription'];
}
