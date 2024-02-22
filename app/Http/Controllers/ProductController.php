<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view("products.index");
    }

    public function create(){
        $category = Category::all();
        return view("products.create", compact("category"));
    }
}
