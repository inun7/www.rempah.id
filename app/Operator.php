<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable = ['nama_operator', 'alamat', 'jenis_kelamin', 'no_hp', 'email', 'password', 'token'];
	
	public $timestamps = false;
}
