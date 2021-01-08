<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csmenquiry extends Model
{
   protected $fillable = ['name','email','phone','message_here'];
   public $timestamps = false;
}
