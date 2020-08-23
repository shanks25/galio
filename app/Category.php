<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public function subCategiries()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
}
