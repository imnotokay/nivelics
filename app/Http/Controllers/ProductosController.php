<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        return productos::all();
    }

    public function show($id){
        return productos::find($id);
    }

    public function post(Request $request){
        $producto = productos::where('nombre', $request->nombre)->first();
        if($producto !== null){
            return response()->json(['message' => 'Actualmente existe un producto con el nombre ingresado "'. $request->nombre . '"'], 500);
        }else{
            return productos::create($request->all());
        }
    }

    public function put(Request $request, $id){
        $producto = productos::where('nombre', $request->nombre)->where('id', '<>', $request->id)->first();
        if($producto !== null){
            return response()->json(['message' => 'Actualmente existe un proveedor con el nombre ingresado "'. $request->nombre . '"'], 500);
        }else{
            $producto = productos::findOrFail($id);
            $producto->update($request->all());
            return $producto;
        }
    }

    public function delete(Request $request, $id){
        
        $producto = productos::findOrFail($id);
        $producto->delete();
        return 204;
    }
}
