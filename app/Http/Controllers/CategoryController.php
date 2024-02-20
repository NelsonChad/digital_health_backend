<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view("category.index", compact("categories"));   
    }

    public function create(){

        return view("category.create");
    }
    public function store(CategoryFormRequest $request){

        $data = $request->validated();
        $category = new Category;
        $category->name = $data["name"];

        $category->save();

        return redirect('home/category')->with('message', 'Adicionado com sucesso!');
        
    }
    public function list(){

        return view("category.list");
    }
}
