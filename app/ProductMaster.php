<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMaster extends Model
{
    protected $table ='product_master';
    protected $guarded = []; 
    public function productImages()

    {
        return $this->hasMany(ProductImage::class, 'product_id','id');
    }  
    public function productImagesFirst()

    {
        return $this->hasOne(ProductImage::class, 'product_id','id');
    } 
    public function productImagesLast()

    {
        return $this->hasOne(ProductImage::class, 'product_id','id')->orderBy('id', 'desc');
    } 
}
