<?php

namespace App\Http\Controllers;

use App\auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = auto::all();
        return $autos;
    }
    public function store(Request $request)
    {
        $auto = new auto();
        $auto->name = $request->name;
        $auto->precio = $request->precio;
        $auto->imagen = $request->imagen;
        $autos->save();
    }


    public function show($id)
    {
        $auto = auto::find($id);
        return $auto;
    }

    public function update(Request $request, $id)
    {
        $auto = auto::findOrFail($request->$id);
        $auto->name = $request->name;
        $auto->precio = $request->precio;
        $auto->imagen = $request->imagen;
        $autos->save();
        return $auto;
    }

    public function destroy(auto $auto)
    {
        $auto = auto::destroy($id);
        return $auto;
    }
}
