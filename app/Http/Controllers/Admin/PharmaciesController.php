<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PharmacyFormRequest;
use Illuminate\Http\Request;
use App\Models\Pharmacies;


class PharmaciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pharmacies = Pharmacies::where("visible", "!=" , 0)
        ->where("type", "!=" , 1)
        ->get();

        if (count($pharmacies) <= 0) {
            $message = "Sem nenhum producto!";
        } else {
            $message = "";
        }

        return view("admin.pharmacies.create-edit", compact("pharmacies","message"));   
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
    public function store(PharmacyFormRequest $request)
    {
        $data = $request -> validated();
        $pharmacy = new Pharmacies();
        
        $pharmacy -> name = $data["name"];
        $pharmacy->address = $data['address'];
        if (isset($data['logo'])) {
            $file = $data['logo'];
            $logo = time() . '.' . $file->getClientOriginalExtension();
            $data['logo']->move("uploads/pharmacies", $logo);
            $pharmacy->logo = $logo;
        }

        $pharmacy->latitude = $data['latitude'];
        $pharmacy->longitude = $data['longitude'];
        $pharmacy->open_time = $data['open_time'];
        $pharmacy->close_time = $data['close_time'];
        $pharmacy->province_id = $data['province_id']?? 1;
        
        $pharmacy->save();

        return redirect()->route('admin.pharmacies')->with("message", "Farmácia registrada com sucesso.");
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PharmacyFormRequest $request, string $id)
    {
        $LogoName = "default.png";
        if (isset($request['logo'])) {
            $file = $request['logo'];
            $logo = time() . '.' . $file->getClientOriginalExtension();
            $request['logo']->move("uploads/pharmacies", $logo);
            $LogoName = $logo;
        }

        $response = Pharmacies::find($id)->update([
            'name' => $request['name'],
            'address' =>  $request['address'],
            'logo' => $LogoName,
            'latitude'=>  $request['latitude'],
            'longitude'=>  $request['longitude'],
            'open_time'=>  $request['open_time'],
            'close_time'=>  $request['close_time'],
        ]);

        return redirect()
            ->route('admin.pharmacies')
            ->with('success', "ao Actualizar a Farmácia.")
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
