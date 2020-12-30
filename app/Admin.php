<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['email', 'password', 'token'];
	
	public $timestamps = false;
}
