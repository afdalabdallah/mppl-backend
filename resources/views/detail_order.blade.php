@extends('layouts.app')
@section('title', 'Details | Pakai.in')

@section('main')
    <div class="flex flex-row justify-start pt-10 pl-20">
        <div>
            <a href="/order">
                <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
            </a>
        </div>
    </div>

    <div class="flex flex-col items-center gap-5 mt-20">
        <div class="w-[50%] bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <!-- width : 4%=confirmation || 25%=processing || 46%=package sent ||69% = package received by customer || 100% = package sentback -->
            <div class="bg-[#2DBE78] h-2.5 rounded-full" style="width: {{ $rentDetail->w }}%"></div>
        </div>
        <div class="flex flex-row justify-between w-[50%] text-[#2DBE78] font-semibold text-sm text-center">
            <div>Confirmation</div>
            <div>Processing</div>
            <div>Package Sent</div>
            <div>Package Received <br>by Customer</div>
            <div>Package Send Back</div>
        </div>
    </div>

    <div class="flex flex-row justify-center mt-20 gap-72 mb-10">
        <div>
            <div class="font-semibold">{{ $rentDetail->name }}</div>
            <div class="w-[250px]">
                @foreach ($rentDetail->address as $address)
                    {{ $address }},&nbsp;
                @endforeach
            </div>

            <div class="mt-20">
                <div class="flex flex-row justify-start gap-5 mt-2">
                    <div class="text-[#2DBE78] font-semibold">{{ $rentDetail->updated_at }}</div>
                    <div class="w-[250px]">
                        {{ $rentDetail->status }}
                    </div>
                </div>

            </div>
        </div>

        <!-- order summary -->
        <div>
            <div
                class="flex flex-col items-center justify-center gap-5 bg-[#81D8AE] p-2 border border-black w-[400px] h-[250px]">
                <div class="flex justify-start w-[250px] text-black divide-black">
                    <div class="font-bold text-lg">
                        ORDER SUMMARY
                    </div>
                </div>
                <div class="flex flex-row justify-between w-[250px] text-gray-500 divide-y divide-black">
                    <div class="font-semibold">Cart Subtotal</div>
                    <div class="font-semibold">Rp {{ $rentDetail->total_harga }}</div>
                </div>
                <div class="flex flex-row justify-between w-[250px] text-gray-500">
                    <div class="font-semibold">Shipping</div>
                    <div class="font-semibold">Rp 55000</div>
                </div>
                <div class="flex flex-row justify-between w-[250px] text-gray-500">
                    <div class="font-semibold">Deposit</div>
                    <div class="font-semibold">Rp {{ $rentDetail->deposit }}</div>
                </div>
                <div class="flex flex-row justify-between w-[250px] divide-y divide-black">
                    <div class="font-semibold">Total</div>
                    <div class="font-semibold">Rp {{ $rentDetail->total_harga + 55000 + $rentDetail->deposit }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
