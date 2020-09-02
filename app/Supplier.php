<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function purchase()
    {
        return $this->hasMany(Purchase::class,'supplier_id');
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id');
    }
    protected $table='suppliers';
}
