<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMaster extends Model
{
    use SoftDeletes;
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
    
    public function images()
    {
        return $this->hasMany('App\ProductImage','product_id');
    }
    public function keyValues()
    {
        return $this->hasMany('App\ProductKeyValue','product_id');
    }
}
