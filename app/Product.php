<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function categorysinfo()
    {
        return $this->belongsTo('App\Category');
    }

    public function manufacture()
    {
        return $this->belongsTo('App\Manufacture');
    }
}
