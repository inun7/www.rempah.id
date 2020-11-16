<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $fillable = ['foto', 'deskripsi', 'bobot', 'uang'];
}
