<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
        return 'Rp'.number_format($this->price * 200);
    }
    public function presentDisc()
    {
        return 'Rp'.number_format($this->discount * 200);
    }
}
