<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Pharmacies;


class ProductsControllor extends Controller
{

    private $products;
    private $pharmacies;

    public function __construct(Products $products, Pharmacies $pharmacies) {
        $this->products = $products;
        $this->pharmacies = $pharmacies;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /*public function search(Request $request)
    {
        try{
            $params = $request->param;

            $data = $this->products->where('name','like', "%{$params}%");
            return response()->json(['message' => 'Medicamento carregado!', 'products' => $data, 'status' => true], 201);
        } catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(['message'=> $e->getMessage(), 'status' => false], 501);
            }else{
                return response()->json(['message'=> 'Falha ao carregar medicamento', 'status' => false], 501);
            }
        }
    }*/

    public function search(Request $request)
    //public function search()
    {
        
        $productName = $request->param;
        //$productName = "Xarope";
        try{
       
            $pharmacies = $this->products->search($productName);
            return response()->json(['message' => 'Farmmacias Enconradas!', 'farmacias' => $pharmacies, 'status' => true], 201);

        } catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(['message'=> $e->getMessage(), 'status' => false], 501);
            }else{
                return response()->json(['message'=> 'Falha ao carregar medicamento', 'status' => false], 501);
            }
        }
        
    }

    public function searchS(){
        $productName = "Xarope";
        try{
            $pharmacies = $this->pharmacies->products->get();

            return response()->json(['message' => 'Farmmacias Enconradas!', 'farmacias' => $pharmacies, 'status' => true], 201);


        } catch (\Exception $e){
            if(config('app.debug')){
                return response()->json(['message'=> $e->getMessage(), 'status' => false], 501);
            }else{
                return response()->json(['message'=> 'Falha ao carregar medicamento', 'status' => false], 501);
            }
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
