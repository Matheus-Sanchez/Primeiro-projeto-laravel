<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    protected $fillable = ['client_id'];
    public function products(){
        return $this->hasMany(products::class);
    }
    public function client(){
        return $this->belongsTo(client::class);
    }
}