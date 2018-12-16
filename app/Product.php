<?php

namespace App;

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
}
