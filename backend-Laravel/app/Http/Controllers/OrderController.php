<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_name = $data->product_name;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;

            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }
        return response()->json([
            'status' => true,
            'message' => 'Hemos recibido tu pedido. Nos conectaremos contigo pronto...'
        ], 200);
    }
    public function show_order()
    {

        $user = Auth::user();
        $userid = $user->id;
        $order = order::where('user_id', '=', $userid)->get();
        return response()->json($order);
    }
    public function cancel_order($id)
    {
        $order=order::find($id);
        $order->delivery_status='Pedido cancelado';
        $order->save();
        return response()->json([
            'status' => true,
            'message' => 'Pedido cancelado'
        ], 200);
    }
}
