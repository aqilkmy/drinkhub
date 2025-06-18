<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        Order::create([
            'product' => $request->product,
            'price' => $request->price,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect('/')->with('success', 'Pesanan berhasil dikirim!');
    }
}
