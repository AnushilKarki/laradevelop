<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopGoal extends Model
{
    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id');
    }

protected $table='shop_goals';
}
