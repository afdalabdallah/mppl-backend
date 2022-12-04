@extends('layouts.app')

@section('title', 'Review | Pakai.in')

@section('main')
    <div class="flex flex-row justify-start pt-10 pl-20">
        <div class="">
            <a href="/payment">
                <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
            </a>
            <div></div>
        </div>
    </div>



    <div class="flex flex-col items-center gap-5 mt-20">
        <div class="w-[50%] bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <!--  width : 6%=Shipping Address || 38%=payment || 66%=review ||100% = order placed  -->
            <div class="bg-[#2DBE78] h-2.5 rounded-full" style="width: 66%"></div>
        </div>
        <div class="flex flex-row justify-between w-[50%] text-[#2DBE78] font-semibold text-sm text-center">
            <div>Shipping Address</div>
            <div>Payment</div>
            <div>Review</div>
            <div>Order Placed</div>
        </div>
    </div>

    <div
        class="flex flex-col items-center justify-center gap-5 bg-[#81D8AE] p-10 border border-black w-[600px] h-[650px] mt-20 m-auto">
        <div class="flex justify-center align-middle w-[250px] text-black divide-black">
            <div class="font-bold text-lg">
                ORDER SUMMARY
            </div>
        </div>
        <div class="flex flex-row justify-between w-[400px] text-gray-500 divide-y divide-black">
            <div class="font-semibold">Cart Subtotal</div>
            <div class="font-semibold">Rp {{ $totalPrice }}</div>
        </div>
        <div class="flex flex-row justify-between w-[400px] text-gray-500">
            <div class="font-semibold">Shipping</div>
            <div class="font-semibold">Rp 55.000</div>
        </div>
        <!-- tax -->
        <div class="flex flex-row justify-between w-[400px] text-gray-500">
            <div class="font-semibold">Deposit</div>
            <div class="font-semibold">Rp {{ $rentData->deposit }}</div>
        </div>
        <div class="flex flex-row justify-between w-[400px] divide-y divide-black">
            <div class="font-semibold">Total</div>
            <div class="font-semibold">Rp {{ $totalPrice + 55000 + $rentData->deposit }}</div>
        </div>
        <div class="flex justify-center align-middle w-[250px] text-black divide-black">
            <div class="font-bold text-lg">
                SHIPPING METHOD
            </div>
        </div>
        <div class="flex flex-row justify-between w-[400px] text-gray-500">
            <div class="font-semibold">Flat Rate</div>
        </div>
        <div class="flex justify-center align-middle w-[250px] text-black divide-black">
            <div class="font-bold text-lg">
                PAYMENT METHOD
            </div>
        </div>
        <div class="flex flex-row justify-between w-[400px] text-gray-500 ">
            <div class="font-semibold">Bank Transfer</div>
        </div>
        <div class="flex justify-center align-middle w-[250px] text-black divide-black">
            <div class="font-bold text-lg">
                ADDRESS
            </div>
        </div>
        <div class="flex flex-row justify-between w-[400px] text-gray-500 ">
            <div class="font-semibold">
                @foreach ($rentData[0]->address as $address)
                    {{ $address }},&nbsp;
                @endforeach

            </div>
        </div>
    </div>

    <!-- confirm button -->
    <div class="mt-10 mb-10">
        <!-- next button -->
        <a href="checkout4.html">
            <div class="flex flex-row align-middle justify-center text-center">
                <div class="w-[50%]">
                    <form action="place_order" method="post">
                        @csrf
                        <button type="submit"
                            class="text-[#2DBE78] bg-black hover:text-black font-semibold hover:bg-[#2DBE78] py-2 px-4 rounded-full">
                            Confirm
                        </button>
                    </form>
                </div>
            </div>
        </a>
    </div>
@endsection
