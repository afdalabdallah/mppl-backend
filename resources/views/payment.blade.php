@extends('layouts.app')

@section('title', 'Payment | Pakai.in')

@section('main')
    <div class="flex flex-row justify-start pt-10 pl-20">
        <div class="">
            <a href="/checkout">
                <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
            </a>
        </div>
    </div>

    <div class="flex flex-col items-center gap-5 mt-20">
        <div class="w-[50%] bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <!--  width : 6%=Shipping Address || 38%=payment || 66%=review ||100% = order placed  -->
            <div class="bg-[#2DBE78] h-2.5 rounded-full" style="width: 38%"></div>
        </div>
        <div class="flex flex-row justify-between w-[50%] text-[#2DBE78] font-semibold text-sm text-center">
            <div>Shipping Address</div>
            <div>Payment</div>
            <div>Review</div>
            <div>Order Placed</div>
        </div>
    </div>

    <div class="flex flex-row w-[46%]  m-auto mt-20 gap-10 mb-10">
        <div class="w-[50%]">
            <h1 class="text-3xl font-semibold">Payment Method</h1>
            <div class="flex flex-col gap-5 mt-10">
                <div class="flex flex-row gap-5">
                    <div class="w-[10%]">
                        <input type="radio" name="payment" id="payment" class="h-5 w-5 text-[#2DBE78]" />
                    </div>
                    <div class="w-[90%]">
                        <div class="flex flex-row gap-5">
                            <div class="w-[20%]">
                                <img src="/img/bca.png" alt="bca" class="h-[50px] w-auto" />
                            </div>
                            <div class="w-[80%]">
                                <h1 class="text-xl font-semibold">Bank Central Asia</h1>
                                <h1 class="text-sm font-semibold">1234567890</h1><br>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm">Transfer to this account and upload your payment proof to</p>
                            <!-- whatsapp -->
                            <a
                                href="https://api.whatsapp.com/send?phone=6287742228411&text=Halo%20Pakai.in%20saya%20sudah%20transfer%20dan%20saya%20ingin%20upload%20bukti%20transfer%20saya">
                                <div class="flex flex-row gap-2 mt-5">
                                    <div class="w-[10%]">
                                        <ion-icon name="logo-whatsapp" class="text-3xl text-[#2DBE78]"></ion-icon>
                                    </div>
                                    <div class="w-[90%]">
                                        <p class="text-sm">Whatsapp</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <!-- next button -->
                <a href="checkout3.html">
                    <div class="flex flex-row justify-end">
                        <div class="w-[50%]">
                            <a href="/review">
                                <button
                                    class="text-[#2DBE78] bg-black hover:text-black font-semibold hover:bg-[#2DBE78] py-2 px-4 rounded-full">
                                    Next
                                </button></a>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="flex flex-col items-center justify-center gap-5 bg-[#81D8AE] p-2 border border-black w-[400px] h-[300px] mt-5">
            <div class="flex justify-start w-[250px] text-black divide-black">
                <div class="font-bold text-lg">
                    ORDER SUMMARY
                </div>
            </div>
            <div class="flex flex-row justify-between w-[250px] text-gray-500 divide-y divide-black">
                <div class="font-semibold">Cart Subtotal</div>
                <div class="font-semibold">Rp {{ $totalPrice }}</div>
            </div>
            <div class="flex flex-row justify-between w-[250px] text-gray-500">
                <div class="font-semibold">Shipping</div>
                <div class="font-semibold">Rp 55.000</div>
            </div>
            <!-- tax -->
            <div class="flex flex-row justify-between w-[250px] text-gray-500">
                <div class="font-semibold">Deposit</div>
                <div class="font-semibold">Rp {{ $rentData->deposit }}</div>
            </div>
            <div class="flex flex-row justify-between w-[250px] divide-y divide-black">
                <div class="font-semibold">Total</div>
                <div class="font-semibold">Rp {{ $totalPrice + 55000 + $rentData->deposit }}</div>
            </div>
        </div>
    </div>
@endsection
