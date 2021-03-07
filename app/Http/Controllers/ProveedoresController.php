<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\proveedores;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
    {
        return proveedores::all();
    }

    public function show($id){
        return proveedores::find($id);
    }

    public function post(Request $request){
        $proveedor = proveedores::where('nombre', $request->nombre)->first();
        if($proveedor !== null){
            return response()->json(['message' => 'Actualmente existe un proveedor con el nombre ingresado "'. $request->nombre . '"'], 500);
        }else{
            return proveedores::create($request->all());
        }
    }

    public function put(Request $request, $id){
        $proveedor = proveedores::where('nombre', $request->nombre)->where('id', '<>', $request->id)->first();
        if($proveedor !== null){
            return response()->json(['message' => 'Actualmente existe un proveedor con el nombre ingresado "'. $request->nombre . '"'], 500);
        }else{
            $proveedor = proveedores::findOrFail($id);
            $proveedor->update($request->all());
            return $proveedor;
        }
    }

    public function delete(Request $request, $id){
        $productos = productos::where('proveedor_id', $id)->first();
        if($productos === null){
            $proveedor = proveedores::findOrFail($id);
            $proveedor->delete();
            return 204;
        }else{
            return response()->json(['message' => 'Actualmente existen productos asociados al proveedor que desea eliminar, por favor elimine las relaciones e intentelo de nuevo'], 500);
        }
    }
}
