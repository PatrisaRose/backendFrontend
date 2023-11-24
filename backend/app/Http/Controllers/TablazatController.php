<?php

namespace App\Http\Controllers;

use App\Models\Tablazat;
use Illuminate\Http\Request;

class TablazatController extends Controller
{
    public function index(){
        $tablazat = response()->json(Tablazat::all());
        return $tablazat;
    }

    public function show($id){
        $tablazat = response()->json(Tablazat::find($id));
        return $tablazat;
    }

    public function store(Request $request){
        $tablazat = new Tablazat();
        $tablazat->name = $request->name;
        $tablazat->country = $request->country;
        $tablazat->city = $request->city;
        $tablazat->zipcode = $request->zipcode;
        $tablazat->address = $request->address;
        $tablazat->save();
    }

    public function update(Request $request, $id){
        $tablazat = Tablazat::find($id);
        $tablazat->name = $request->name;
        $tablazat->country = $request->country;
        $tablazat->city = $request->city;
        $tablazat->zipcode = $request->zipcode;
        $tablazat->address = $request->address;
        $tablazat->save();
    }

    public function destroy($id){
        Tablazat::find($id)->delete();
    }
}