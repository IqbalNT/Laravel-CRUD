<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable=['country_name','name','email','phone','fax','web_url','date','logo'];
}
