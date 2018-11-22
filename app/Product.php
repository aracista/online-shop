<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['nama','deskripsi','warna','category_id','gambar'];
    //
    public function category()
    {
    	$this->belongsTo(Category::class);
    }
}
