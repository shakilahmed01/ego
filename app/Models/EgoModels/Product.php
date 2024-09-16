<?php

namespace App\Models\EgoModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function lensDesign()
    {
        return $this->belongsTo(LensDesign::class);
    }
    public function diameter()
    {
        return $this->belongsTo(Diameter::class);
    }

    public function baseCurve()
    {
        return $this->belongsTo(BaseCurve::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function replacement()
    {
        return $this->belongsTo(Replacement::class);
    }

    public function tone(){
        return $this->belongsTo(Tone::class);
    }

    public function material(){
        return $this->belongsTo(Material::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
