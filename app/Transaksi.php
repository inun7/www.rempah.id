<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
		'tanggal', 
		'kuantitas',
		'no_resi',
		'status',
		'id_produk', 
		'id_pembeli'
	];
}
