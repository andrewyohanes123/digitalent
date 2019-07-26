<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = ['name', 'brand_id', 'type_id', 'category_id', 'picture'];
    
    public function brand()
    {
        return $this->belongsTo(\App\Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

    public function type()
    {
        return $this->belongsTo(\App\Type::class);
    }
}
