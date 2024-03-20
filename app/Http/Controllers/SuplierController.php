<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupliersFormRequest;
use App\Models\Supliers;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index() {

        $suppliers = Supliers::all();

         return view("supliers.index", compact('suppliers'));
    }
    public function store(SupliersFormRequest  $request) {

        $data = $request->validated();
        $supplier = new Supliers;
        $supplier->supplier_name = $data["supplier_name"];
        $supplier->contact = $data["contact"];
        $supplier->save();

        return redirect('home/supliers')->with('message', 'Fornecedor adicionado com Sucesso');
   }
   
}
