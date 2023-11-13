<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsCart extends Model
{

    protected $fillable = ['client_id', 'products_id', 'qtd'];

    public function shoppingCart(){
        return $this->belongsTo(shoppingCart::class);
    }
    public function products(){
        return $this->belongsTo(Products::class);
    }
}
