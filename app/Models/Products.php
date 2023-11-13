<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name', 'price', 'description'];


    //hasmany ->productsList and productsCarts

    public function productsList(){
        return $this->hasMany(productsList::class);
    }
    public function productsCart(){
        return $this->hasMany(productsCart::class);
    }

}
