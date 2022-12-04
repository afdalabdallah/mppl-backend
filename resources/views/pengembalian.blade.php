@extends('layouts.app')

@section('title', 'Return Status | Pakai.in')

@section('main')
    <div class="flex flex-row justify-start pt-10 pl-20">
        <div class="">
            <a href="/dashboard">
                <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
            </a>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <div class="text-3xl font-bold">RETURN STATUS</div>
    </div>
    <div class="text-center mt-12">
        <a href="/pengembalian/form"
            class="btn text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800">
            Return New Item
        </a>
    </div>

    <div class="flex flex-col text-center mt-10 min-h-screen">
        <div class="flex flex-row justify-center gap-10 text-center font-semibold text-[#2DBE78]">
            <div class="w-[400px]">PRODUCT</div>
            <div class="w-[200px]">ORDER CODE</div>
            <div class="w-[200px]">SENT</div>
            <div class="w-[200px]">DEPOSIT</div>
            <div class="w-[200px]">STATUS</div>
        </div>
        @foreach ($pengembalianData as $data)
            <a href="/pengembalian_detail/{{ $data->id }}">
                <div class="flex flex-row justify-center gap-10 text-center pt-10">
                    <div class="w-[400px] flex flex-row justify-center  gap-5">
                        <img src="/img/item/{{ $data->img }}" alt="product" class="h-[100px]" />
                        <div>
                            {{ $data->name }}
                        </div>
                    </div>
                    <div class="w-[200px]">{{ $data->order_id }}</div>

                    <div class="w-[200px]">{{ $data->created_at }}</div>
                    <div class="w-[200px]">
                        RP {{ $data->deposit }}
                    </div>
                    <div class="w-[200px]">
                        {{ $data->status }}

                    </div>
                </div>
            </a>
        @endforeach

    </div>
@endsection
