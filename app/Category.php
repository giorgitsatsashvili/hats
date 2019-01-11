<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**\
 * @property string title
 * @property Product product
 */
class Category extends Model
{
    protected $table = "category";

    protected $visible = [
        "title",
        "product"
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class)->withPivot('product_id');
    }
}
