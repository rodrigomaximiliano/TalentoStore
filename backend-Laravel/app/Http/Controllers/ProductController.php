<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return response()->json($product);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:60',
            'description' => 'required|string|max:150',
            'image'=>'string', 
            'category'=>'required|string|max:150',
            'price' => 'required|numeric',
            'quantity'=>'required|numeric',
        ];
        $validator = Validator::make($request->input(),$rules);
        if($validator->fails()){
            return response()->json([
            'status' => false,
            'errors' => $validator->errors()->all()
            ],400);
        }
        $product = new Product($request->input());
        $product -> save();
        return response()->json([
            'status' => true,
            'message' => 'Producto insertado satisfactoriamente'
            ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json(['status' => true, 'data' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required|string|max:60',
            'description' => 'required|string|max:150',
            'image'=>'string',
            'category'=>'required|string|max:150',
            'price' => 'required|numeric',
            'quantity'=>'required|numeric',
        ];
        $validator = Validator::make($request->input(),$rules);
        if($validator->fails()){
            return response()->json([
            'status' => false,
            'errors' => $validator->errors()->all()
            ],400);
        }
        $product->update($request->input());
        return response()->json([
            'status' => true,
            'message' => 'Producto actualizado satisfactoriamente'
            ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'status' => true,
            'message' => 'Producto eliminado satisfactoriamente'
            ],200);
    }
}