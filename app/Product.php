<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['nama','deskripsi','warna','harga','category_id','gambar'];
    //
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
