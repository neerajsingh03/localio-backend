<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function keyFeatures()
    {
        return $this->hasMany(ProductKeyFeature::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products');
    }
    public function translations()
    {
        return $this->hasMany(ProductTranslation::class);
    }
    
}
