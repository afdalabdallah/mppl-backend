@extends('layouts.app')

@section('title', 'Review | Pakai.in')

@section('main')
    <div class="flex flex-col items-center gap-5 mt-20">
        <div class="w-[50%] bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <!--  width : 6%=Shipping Address || 38%=payment || 66%=review ||100% = order placed  -->
            <div class="bg-[#2DBE78] h-2.5 rounded-full" style="width: 100%"></div>
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
        <div class="flex flex-col items-center justify-center gap-5">
            <div class="text-3xl font-bold">Order Placed!</div><br>
            <div class="text-3xl font-semibold">Thank you for your order</div>
        </div>
        <div class="flex flex-col items-center justify-center gap-5">
            <div class="text-lg font-semibold">Your order will be delivered in 3-5 business days</div>
        </div>
        <div class="flex flex-col items-center justify-center gap-5">
            <div class="text-lg font-semibold">You can track your order status in your dashboard</div>
        </div>
        <div class="flex flex-col items-center justify-center gap-5">
            <div class="text-lg font-semibold">If you have any questions, please contact us at</div>
            <div class="text-lg font-semibold"> +62 877 4222 8411</div>
        </div>
    </div>

    <!-- back button -->
    <div class="flex flex-row items-center justify-center mt-10 mb-10">
        <a href="/dashboard">
            <button
                class="bg-[#2DBE78] text-black hover:bg-black font-semibold hover:text-[#2DBE78] py-2 px-4 rounded-full">
                Back to Home
            </button>
        </a>
    </div>
@endsection
