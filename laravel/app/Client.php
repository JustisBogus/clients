<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
   protected $fillable = ['lastname', 'email', 'phonenumber1', 'phonenumber2', 'comment'];

}
