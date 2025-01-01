<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'origin_price', 'description', 'sale_price', 'slug', 'crawl_url'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_n_category', 'product_id', 'category_id');
    }

    public function images()
    {
        return $this->hasMany(Gallery::class, 'product_id', 'id');
    }
}
