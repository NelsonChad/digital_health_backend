<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pharmacies;

class PharmaciesController extends Controller
{

    private $pharmacies;
    private $totalPage = 10;

    public function __construct(Pharmacies $pharmacies) {
        $this->pharmacies = $pharmacies;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pharmacies = $this->pharmacies
        ->where("visible", "!=" , 0)
        ->where("type", "!=" , 1)
        ->get();

        if ($pharmacies == null) {
            return response()->json(['message' => 'Sem nenhuma farmacia', 'status' => false], 422);
        } else {
            return response()->json(['message' => 'success', 'pharmacies' => $pharmacies,'status' => true], 200);
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
