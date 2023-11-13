<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsList extends Model
{
    protected $fillable = ['list_id', 'products_id'];

    public function products(){
        return $this->belongsTo(Products::class);
    }
    public function wishlist(){
        return $this->belongsTo(Wishlist::class);
    }
}
