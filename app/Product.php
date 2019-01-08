<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $visible = [
        "title",
        "description",
        "price",
        "quantity",
    ];

    public function scopeSearch(Builder $query, $title)
    {
        return $query->where('title', 'like', '%' . $title . '%');
    }
}
