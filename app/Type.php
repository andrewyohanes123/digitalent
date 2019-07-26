<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name'];
    
    public function shoes()
    {
        return $this->hasMany(\App\Shoe::class);
    }
}
