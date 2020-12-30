<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = 
	[
		'nama', 
		'alamat', 
		'jenis_kelamin', 
		'no_hp',
		'jenis_bank',
		'rekening', 
		'email', 
		'password', 
		'token'
	];
	
	public $timestamps = false;
}
