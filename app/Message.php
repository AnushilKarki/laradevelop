<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }
  public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id');
    }
}
