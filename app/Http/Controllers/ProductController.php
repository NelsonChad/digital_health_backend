<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Product_brands;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){

        $products = Products::
        join("product_brands", "products.brand_id","=", "product_brands.id")
        ->join("product_categories", "products.category_id","=", "product_categories.id")
        ->select("products.id","products.name as product_name", "products.price","products.code", "products.created_at",
         "product_brands.name as brand","product_categories.name as category","products.image")
        ->get();

        if (count($products) <= 0) {
            $message = "Sem nenhum producto!";
        } else {
            $message = "";
        }

        return view("products.index", compact('products', 'message'));
    }

    public function create(){
        $products = Products::
        join("product_brands", "products.brand_id","=", "product_brands.id")
        ->join("product_categories", "products.category_id","=", "product_categories.id")
        ->select("products.id","products.name as product_name", "products.price","products.code", "products.created_at",
         "product_brands.name as brand","product_categories.name as category","products.image")
        ->get();
        $categories = Category::all();
        $brands = Product_brands::all();

        if (count($products) <= 0) {
            $message = "Sem nenhum producto!";
        } else {
            $message = "";
        }
        return view("products.create", compact("categories", "products", "brands", "message"));
    }


    public function store(ProductFormRequest $request){
        
        $data = $request -> validated();

        $product = new Products;
        $product -> name = $data["name"];
        if (isset($data['image'])) {
            $file = $data['image'];
            $image = time() . '.' . $file->getClientOriginalExtension();
            $data['image']->move("uploads/products", $image);
            $product->image = $image;
        }

        
            $product->code = $data["code"];
            $product->price = $data["price"];
            $product->description = $data["description"];
            $product->brand_id = $data['brand_id']?? 1;
            $product->category_id = $data['category_id']?? 1;
            $product->pharmacy_id = Auth::user()->pharmacy_id;
            $product -> save();

        return redirect("home/products") -> with("message","Produto adicionado com SECESSO");
    }
}
