<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appenquiry extends Model
{
   protected $fillable = ['school_name','school_board','school_phonenumber','school_website','school_email','contact_person','mobile_no','school_enquiry','school_address'];
   public $timestamps = false;
}
