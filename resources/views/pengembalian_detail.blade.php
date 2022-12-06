@extends('layouts.app')
@section('title', 'Return Detail | Pakai.in')

@section('main')
    <div class="flex flex-row justify-start pt-10 pl-20">
        <div class="">
            <a href="/pengembalian">
                <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
            </a>
        </div>
    </div>

    <div class="flex justify-center mb-20">
        <div class="bg-[#81D8AE] w-[40%]  rounded-3xl border-black border-[2px]">
            <div class="flex flex-col justify-start p-16 pb-0 text-2xl font-semibold">Return (Detail)</div>
            <div class="gap-6 flex flex-col justify-start p-16 pt-0 mt-10 text-2xl font-semibold">
                <div class="flex flex-col gap-1">
                    <h1>Order ID</h1>
                    <hr>
                    <p class="text-xl text-gray-600">{{ $pengembalianData->order_id }}</p>
                    <hr>
                </div>
                <div class="flex flex-col gap-1">
                    <h1>Name</h1>
                    <hr>
                    <p class="text-xl text-gray-600">{{ $pengembalianData->name }}</p>
                    <hr>
                </div>
                <div class="flex flex-col gap-1">
                    <h1>Item</h1>
                    <hr>
                    <p class="text-xl text-gray-600">{{ $pengembalianData->item_name }}</p>
                    <hr>
                </div>
                <div class="flex flex-col gap-1">
                    <h1>Address</h1>
                    <hr>
                    <p class="text-xl text-gray-600">{{ $pengembalianData->address }}</p>
                    <hr>
                </div>
                <div class="flex flex-col gap-1">
                    <h1>Telp. Number</h1>
                    <hr>
                    <p class="text-xl text-gray-600">{{ $pengembalianData->no_telp }}</p>
                    <hr>
                </div>
                <div class="flex flex-col gap-1">
                    <h1>Bank</h1>
                    <hr>
                    <p class="text-xl text-gray-600">{{ $pengembalianData->bank }}</p>
                    <hr>
                </div>
                <div class="flex flex-col gap-1">
                    <h1>Bank Number</h1>
                    <hr>
                    <p class="text-xl text-gray-600">{{ $pengembalianData->nomor_bank }}</p>
                    <hr>
                </div>
                <div class="flex flex-col gap-1">
                    <h1>Resi Number</h1>
                    <hr>
                    <p class="text-xl text-gray-600">{{ $pengembalianData->no_resi }}</p>
                    <hr>
                </div>
                <div class="flex flex-row gap-20 justify-between mt-5">
                    <h1>Resi</h1>
                    <h1>Paket</h1>
                </div>
                <hr>
                <div class="flex justify-around gap-52">
                    <img src="/img/return/{{ $pengembalianData->foto_resi }}" alt="" class="h-[200px]">
                    <img src="/img/return/{{ $pengembalianData->foto_paket }}" alt="" class="h-[200px]">
                </div>
            </div>
        </div>
    </div>
@endsection
