<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use App\Models\Product_brands;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        $brands = Product_brands::all();
        return view("category.index", compact("categories","brands"));   
    }

    public function create(){

        return view("category.create");
    }
    public function store(CategoryFormRequest $request){

        $data = $request->validated();
        $category = new Category;
        $category->name = $data["name"];

        $category->save();

        return redirect('home/category')->with('message', 'Categoria adicionado com sucesso!');
        
    }

    public function storeBrend(CategoryFormRequest $request){

        $data = $request->validated();
        $brand = new Product_brands;
        $brand->name = $data["name"];

        $brand->save();

        return redirect('home/category')->with('message', 'Marca adicionado com sucesso!');
        
    }
    public function list(){

        return view("category.list");
    }
}
