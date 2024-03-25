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

    public function search(String $prodName){

        $pharmacies = $this->where(function ($query) use ($prodName){

            if($prodName != ""){
                $query->where('products.name','like',  "%{$prodName}%");
                $query->where('pharmacies.visible',1);
            }
    
        })
        ->join('pharmacies', 'pharmacies.id', '=', 'products.pharmacy_id')
        ->select(
            'pharmacies.id as pharmacy_id',
            'pharmacies.latitude',
            'pharmacies.longitude',
            'pharmacies.name',
            'pharmacies.address',
            'products.name as product_name',
            'products.id as product_id',
            DB::raw('count(*) as total_products'),
            )
        ->groupBy('pharmacies.id') // Group by pharmacy ID- to not repeat
        ->orderBy('pharmacies.name', 'asc')
        ->get();

        return $pharmacies; 
    }
}
