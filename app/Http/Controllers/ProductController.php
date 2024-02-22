<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        return view("products.index");
    }

    public function create(){
        $categories = Category::all();
        return view("products.create", compact("categories"));
    }

    public function store(ProductFormRequest $request){
        
        $data = $request -> validated();

        $product = new Products;
        $product -> name = $data["name"];
        if($request->hasfile('image')){
            $file = $request->file('image');
            // Verificar se o tipo MIME do arquivo é PNG
            if ($file->getClientOriginalExtension() === 'png' && $file->getClientMimeType() === 'image/png') {
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/products/', $filename);
                $product->image = $filename;
            }
        }
        $product -> code = $data["code"];
        $product -> price = $data["price"];
        $product -> description = $data["description"];
        $product->brand_id = $data['brand_id'];
        $product->category_id = $data['category_id'];
        $product->pharmacy_id = Auth::user()->pharmacy_id;
        $product -> save();

        return redirect("home/products") -> with("message","Produto adicionado com SECESSO");
    }
}
