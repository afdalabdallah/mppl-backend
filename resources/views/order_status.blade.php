@extends('layouts.app')

@section('title', 'Order Status | Pakai.in')

@section('main')
    <div class="flex flex-row justify-start pt-10 pl-20">
        <div class="">
            <a href="/dashboard">
                <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
            </a>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <div class="text-3xl font-bold">ORDER STATUS</div>
    </div>

    <div class="flex flex-col text-center mt-10 min-h-screen">
        <div class="flex flex-row justify-center gap-10 text-center font-semibold text-[#2DBE78]">
            <div class="w-[400px]">PRODUCT</div>
            <div class="w-[200px]">DATE</div>
            <div class="w-[200px]">SEND TO</div>
            <div class="w-[200px]">AMOUNT</div>
            <div class="w-[200px]">STATUS</div>
            <div class="w-[200px]">CODE</div>
        </div>
        @foreach ($rentData as $data)
            <a href="/detail_order/{{ $data->id }}">
                <div class="flex flex-row justify-center gap-10 text-center mt-10 hover:bg-gray-100">
                    <div class="w-[400px] flex flex-row justify-center  gap-5">
                        <img src="/img/item/{{ $data->img }}" alt="product" class="h-[100px]" />
                        <div>
                            {{ $data->name }}
                        </div>
                    </div>
                    <div class="w-[200px]">{{ $data->start_date }} s/d {{ $data->end_date }}</div>
                    <div class="w-[200px]">
                        @foreach ($data->address as $address)
                            {{ $address }},&nbsp;
                        @endforeach
                    </div>
                    <div class="w-[200px]">Rp {{ $data->total_harga }}</div>
                    <div class="w-[200px]">
                        {{ $data->status }}
                    </div>
                    <div class="w-[200px]">
                        {{ $data->id }}
                    </div>
                </div>
            </a>
        @endforeach

    </div>
@endsection
