@extends('layouts.app')

@section('content')
<div class="flex justify-center items-start min-h-screen py-10">
    <div class="bg-white p-6 rounded-lg shadow w-full max-w-4xl">
        <h1 class="text-2xl font-bold mb-4 text-center">Daftar Pesanan</h1>

        <table class="w-full border border-gray-300 text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2">ID</th>
                    <th class="p-2">Produk</th>
                    <th class="p-2">Harga</th>
                    <th class="p-2">Lokasi</th>
                    <th class="p-2">Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr class="border-t">
                        <td class="p-2">{{ $order->id }}</td>
                        <td class="p-2">{{ $order->product }}</td>
                        <td class="p-2">Rp {{ number_format($order->price, 0, ',', '.') }}</td>
                        <td class="p-2">
                            @if($order->latitude && $order->longitude)
                                <a href="https://www.google.com/maps?q={{ $order->latitude }},{{ $order->longitude }}" target="_blank">
                                    {{ $order->latitude }}, {{ $order->longitude }}
                                </a>
                            @else
                                <em>Belum tersedia</em>
                            @endif
                        </td>
                        <td class="p-2">{{ $order->created_at->format('d M Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
