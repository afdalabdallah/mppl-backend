@extends('layouts.app')

@section('title', 'Order Status | Pakai.in')

@section('main')
<div class="flex flex-row justify-start pt-10 pl-20">
    <div class="">
        <a href="dashboard.html">
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
    <div class="flex flex-row justify-center gap-10 text-center mt-10">
        <div class="w-[400px] flex flex-row justify-center  gap-5">
            <img src="assets/img/cart/cart1.png" alt="product" class="h-[100px]" />
            <div>
                WAISTCOAT WITH <br />
                CONTRAST PIPING <br />
                <SPAN class="baranglain font-semibold">+ 2 OTHER ITEMS</SPAN>
            </div>
        </div>
        <div class="w-[200px]">12/12/2021 - 14/12/2021</div>
        <div class="w-[200px]">
            Jl. Raya Kedungmundu No. 1, Kedungmundu, Kec. Kedungmundu, Kabupaten
            Malang, Jawa Timur 65163
        </div>
        <div class="w-[200px]">Rp. 200.000</div>
        <div class="w-[200px]">
            Delivered
        </div>
        <div class="w-[200px]">
            PLMAA16157522118
        </div>
    </div>
</div>
@endsection