@extends('layouts.app')

@section('title', 'Checkout | Pakai.in')

@section('main')
    <div class="flex flex-row justify-start pt-10 pl-20">
        <div class="">
            <a href="cart.html">
                <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
            </a>
        </div>
    </div>

    <div class="flex flex-col items-center gap-5 mt-20">
        <div class="w-[50%] bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
            <!--  width : 6%=Shipping Address || 38%=payment || 66%=review ||100% = order placed  -->
            <div class="bg-[#2DBE78] h-2.5 rounded-full" style="width: 6%"></div>
        </div>
        <div class="flex flex-row justify-between w-[50%] text-[#2DBE78] font-semibold text-sm text-center">
            <div>Shipping Address</div>
            <div>Payment</div>
            <div>Review</div>
            <div>Order Placed</div>
        </div>
    </div>

    <div class="flex flex-row w-[46%]  m-auto mt-20 gap-10">
        <div class="w-[50%]">
            <form action="/payment" method="post">
                @csrf
                <h1 class="text-3xl font-semibold">Shipping Address</h1>
                <div class="mt-10">
                    <!-- form (name, street address (3 line), country(one line), state/province(one line)) -->

                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-2">
                            <label for="name" class=" text-sm font-semibold">Name<span
                                    class="text-red-500">*</span></label>
                            <input required type="text" name="name" id="name"
                                class="border border-black rounded-sm p-2" placeholder="Name" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="streetAddress" class="text-sm font-semibold">Street Address<span
                                    class="text-red-500">*</span></label>
                            <input required type="text" name="address[]" id="streetAddress"
                                class="border border-black rounded-sm p-2" placeholder="Street Address" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="stateProvince" class="text-sm font-semibold">State/Province<span
                                    class="text-red-500">*</span></label>
                            <input required type="text" name="address[]" id="stateProvince"
                                class="border border-black rounded-sm p-2" placeholder="State/Province" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="country" class="text-sm font-semibold">Country<span
                                    class="text-red-500">*</span></label>
                            <input required type="text" name="address[]" id="country"
                                class="border border-black rounded-sm p-2" placeholder="Country" />
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <h1 class="text-3xl font-semibold">Shipping Method</h1>
                    <div class="mt-10">
                        <div class="flex flex-col justify-between gap-5">
                            <div class="flex flex-row gap-2">
                                <div class="flex flex-row gap-2">
                                    <input type="radio" name="shippingMethod" value="55000" id="flatRate"
                                        class="mt-1" />
                                    <label for="flatRate" class="text-sm font-semibold">Rp 55.000</label>
                                </div>
                                <div class="text-sm">Flat Rate</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <!-- next button -->
                        <a href="checkout2.html">
                            <div class="flex flex-row justify-end">
                                <div class="w-[50%]">
                                    <button type="submit"
                                        class="text-[#2DBE78] bg-black hover:text-black font-semibold hover:bg-[#2DBE78] py-2 px-4 rounded-full">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div
            class="flex flex-col items-center justify-center gap-5 bg-[#81D8AE] p-2 border border-black w-[400px] h-[300px] mt-20">
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
                <div class="font-semibold">Rp. 55.000</div>
            </div>
            <!-- tax -->
            <div class="flex flex-row justify-between w-[250px] text-gray-500">
                <div class="font-semibold">Tax</div>
                <div class="font-semibold">Rp. 0</div>
            </div>
            <div class="flex flex-row justify-between w-[250px] divide-y divide-black">
                <div class="font-semibold">Total</div>
                <div class="font-semibold">Rp. {{ $totalPrice + 55000 }}</div>
            </div>
        </div>
    </div>
@endsection
