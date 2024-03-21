<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'image',
        'code',
        'price',
        'description',
        'brand_id'=> 1,
        'category_id'=> 1,
        'pharmacy_id'=> 1,
    ];

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacies::class);
    }

}
