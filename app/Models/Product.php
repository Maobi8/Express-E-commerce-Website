<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
     use HasFactory;

    protected $fillable = ['name', 'description', 'rating', 'reviews_count', 'price'];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Optional helper to get the main image easily:
    public function mainImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_main', true);
    }

}
