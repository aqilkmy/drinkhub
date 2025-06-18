<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $itemsJson = $request->input('items_json');
        $items = json_decode($itemsJson, true);

        if (!$items || count($items) === 0) {
            return redirect()->back()->with('error', 'Tidak ada pesanan yang dikirim.');
        }

        foreach ($items as $item) {
            Order::create([
                'product' => $item['nama_produk'],
                'price' => $item['harga'],
                'quantity' => $item['jumlah'],
                'total' => $item['total'], // pastikan kolom total ada di migration
                'latitude' => $request->input('latitude'),
                'longitude' => $request->input('longitude'),
            ]);
        }

        return redirect()->route('admin.orders.index')->with('success', 'Pesanan berhasil disimpan.');
    }

    // Fungsi ini sebetulnya tidak dipakai jika semua order dikirim via form checkout
    public function tambahPesanan(Request $request)
    {
        $nama_produk = $request->input('nama_produk');
        $harga = (int) $request->input('harga');
        $jumlah = (int) $request->input('jumlah');
        $total = $harga * $jumlah;

        $pesanan = session()->get('pesanan', []);
        $pesanan[] = [
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'total' => $total,
        ];

        session()->put('pesanan', $pesanan);
        return redirect()->back()->with('success', 'Pesanan berhasil ditambahkan.');
    }
}
