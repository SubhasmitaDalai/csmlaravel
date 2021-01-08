<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freedemo extends Model
{
   protected $fillable = ['school_name','school_board','school_phone_number','school_website','school_email','school_address'];
   public $timestamps = false;
}
