<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add_cart(Request $request, $id)
    {
        $user = Auth::user();
        $userid = $user->id;
        $product = product::find($id);
        $product_exist_id = cart::where('product_id', '=', $id)
            ->where('user_id', '=', $userid)
            ->get('id')->first();
        if ($product_exist_id) {

            $cart = cart::find($product_exist_id)->first();
            $quantity = $cart->quantity;
            $cart->quantity = $quantity + $request->quantity;
            $cart->price = $product->price * $quantity;

            $cart->save();
            return response()->json([
                'status' => true,
                'message' => 'Producto agregado satisfactoriamente'
            ], 200);
        } else {

            $cart = new cart;
            $cart->name = $user->full_name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->product_name = $product->name;
            $cart->price = $product->price * $request->quantity;
            $cart->image = $product->image;
            $cart->Product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();

            return response()->json([
                'status' => true,
                'message' => 'Producto agregado satisfactoriamente'
            ], 200);
        }
    }
    public function show_cart()
    {
        $id = Auth::user()->id;
        $cart = cart::where('user_id', '=', $id)->get();
        return response()->json($cart);
    }
    public function remove_cart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return response()->json([
            'status' => true,
            'message' => 'Producto eliminada'
        ], 200);
    }
    
}