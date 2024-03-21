<?php

namespace App\Http\Controllers;

use App\Http\Requests\PharmacyFormRequest;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index(){
        return view('pharmacies.index');
    }

    public function store(PharmacyFormRequest $request)
    {

    }

}
