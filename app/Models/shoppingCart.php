<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppingCart extends Model
{
    protected $fillable = ['client_id'];

    public function client(){
        return $this->belongsTo(client::class);
    }
    public function productsCart(){
        return $this->hasMany(productsCart::class);
    }
}