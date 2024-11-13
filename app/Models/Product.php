<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey='product_id';
    protected $fillable=[
        'product_category',
        'product_name',
        'product_price',
        'product_quantity',
        'product_image1',
        'product_image2',
        'product_description',
        'product_keywords',
        'brand',
        'variations',
        'internal_Notes'

];
}
