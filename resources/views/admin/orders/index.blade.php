@extends('layouts.app')

@section('content')
<div class="flex justify-center items-start min-h-screen py-10 bg-gray-50">
    <div class="bg-white mt-24 rounded-xl shadow-lg w-full max-w-6xl p-6">
        <h1 class="text-3xl font-bold mb-6 text-center text-cyan-800">🧾 Daftar Pesanan</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full border rounded-lg overflow-hidden shadow-sm">
                <thead class="bg-cyan-800 text-white text-sm uppercase">
                    <tr>
                        <th class="px-4 py-3 text-left">ID</th>
                        <th class="px-4 py-3 text-left">Produk</th>
                        <th class="px-4 py-3 text-left">Harga Satuan</th>
                        <th class="px-4 py-3 text-left">Jumlah</th>
                        <th class="px-4 py-3 text-left">Total</th>
                        <th class="px-4 py-3 text-left">Lokasi</th>
                        <th class="px-4 py-3 text-left">Waktu</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    @php
                        $grandTotal = 0;
                    @endphp
                    @forelse($orders as $order)
                        @php
                            $subtotal = $order->price * ($order->quantity ?? 1);
                            $grandTotal += $subtotal;
                        @endphp
                        <tr class="border-b hover:bg-gray-100 transition">
                            <td class="px-4 py-2">{{ $order->id }}</td>
                            <td class="px-4 py-2 font-semibold text-cyan-900">{{ $order->product }}</td>
                            <td class="px-4 py-2">Rp {{ number_format($order->price, 0, ',', '.') }}</td>
                            <td class="px-4 py-2">{{ $order->quantity ?? 1 }}</td>
                            <td class="px-4 py-2 font-semibold text-cyan-800">Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                            <td class="px-4 py-2">
                                @if($order->latitude && $order->longitude)
                                    <a href="https://www.google.com/maps?q={{ $order->latitude }},{{ $order->longitude }}"
                                       class="text-blue-600 hover:underline"
                                       target="_blank">
                                       📍 {{ number_format($order->latitude, 4) }}, {{ number_format($order->longitude, 4) }}
                                    </a>
                                @else
                                    <span class="italic text-gray-400">Belum tersedia</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 text-gray-600">{{ $order->created_at->format('d M Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-gray-500">Tidak ada pesanan tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>

                @if(count($orders))
                <tfoot class="bg-gray-100 font-semibold text-cyan-900 text-sm">
                    <tr>
                        <td colspan="4" class="px-4 py-3 text-right">Total Keseluruhan:</td>
                        <td class="px-4 py-3">Rp {{ number_format($grandTotal, 0, ',', '.') }}</td>
                        <td colspan="2"></td>
                    </tr>
                </tfoot>
                @endif
            </table>
        </div>
    </div>
</div>
@endsection
