<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
   protected $fillable = ['company_name','company_website','first_name','last_name','company_mail','phone_number','country','employees','partner','message_field'];
   public $timestamps = false;
}
