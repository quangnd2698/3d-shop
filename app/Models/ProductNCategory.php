<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductNCategory extends Model
{
    use HasFactory;
    protected $table = 'product_n_category';
    protected $fillable = ['product_id', 'category_id', 'is_parent'];
}
