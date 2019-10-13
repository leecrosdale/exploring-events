<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];


    public function food()
    {
        return $this->belongsTo(Food::class);
    }

}
