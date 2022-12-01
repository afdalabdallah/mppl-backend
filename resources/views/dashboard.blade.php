@extends('layouts.app')

@section('title', 'Dashboard | Pakai.in')

@section('main')
    <div>
        <div class="flex items-center justify-center h-[700px]">
            <div class="rounded">
                <img src="/img/dashboard/dashboard.png" class="h-[550px]" alt="">
            </div>
        </div>
        <div class="bg-[#81D8AE] mt-10">
            <div class="flex items-center justify-evenly p-10">
                <div>
                    <img src="/img/dashboard/brand_logo/zara.png" alt="" class="h-[50px]">
                </div>
                <div>
                    <img src="/img/dashboard/brand_logo/uniqlo.svg" alt="" class="h-[50px]">
                </div>
                <div>
                    <img src="/img/dashboard/brand_logo/obey.png" alt="" class="h-[50px]">
                </div>
                <div>
                    <img src="/img/dashboard/brand_logo/lv.png" alt="" class="h-[50px]">
                </div>
                <div>
                    <img src="/img/dashboard/brand_logo/hnm.png" alt="" class="h-[50px]">
                </div>
                <div>
                    <img src="/img/dashboard/brand_logo/balenciaga.png" alt="" class="h-[50px]">
                </div>
            </div>
        </div>
        <!-- new arrivals -->
        <div class=" bg-white mt-20">
            <div class="font-extrabold text-4xl p-12 tracking-tighter">NEW ARRIVALS</div>
            <div class="flex items-center justify-evenly mt-10">
                <div>
                    <img src="/img/dashboard/new_arrivals/newarrivals(1).png" alt="" class="h-[600px]">
                    <div class="pt-5">
                        <div class="text-2xl font-semibold">
                            Hoodies & Sweatshirts
                        </div>
                        <a href="/catalog/Hoodie" class="">
                            <div class="text-xl text-gray-400 hover:text-[#2DBE78] hover:font-semibold">
                                Explore Now >
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <img src="/img/dashboard/new_arrivals/newarrivals(2).png" alt="" class="h-[600px]">
                    <div class="pt-5">
                        <div class="text-2xl font-semibold">
                            Shoes & Boots
                        </div>
                        <a href="/catalog/Shoes" class="">
                            <div class="text-xl text-gray-400 hover:text-[#2DBE78] hover:font-semibold">
                                Explore Now >
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <img src="/img/dashboard/new_arrivals/newarrivals(3).png" alt="" class="h-[600px]">
                    <div class="pt-5">
                        <div class="text-2xl font-semibold">
                            Tees & T-Shirt
                        </div>
                        <a href="/catalog/Shirt" class="">
                            <div class="text-xl text-gray-400 hover:text-[#2DBE78] hover:font-semibold">
                                Explore Now >
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- youngs favorite -->
        <div class="bg-white mt-20">
            <div class="font-extrabold text-4xl p-12 tracking-tighter">YOUNG'S FAVORITE</div>
            <div>
                <div class="flex items-center justify-evenly mt-10">
                    <div>
                        <img src="/img/dashboard/young_favorite/youngfav(1).png" alt="" class="h-[350px]">
                        <div class="pt-5">
                            <div class="text-2xl font-semibold">
                                Trending on instagram
                            </div>
                            <a href="/catalog" class="">
                                <div class="text-xl text-gray-400 hover:text-[#2DBE78] hover:font-semibold">
                                    Explore Now >
                                </div>
                            </a>
                        </div>
                    </div>
                    {{-- <div>
                        <img src="/img/dashboard/young_favorite/youngfav(2).png" alt="" class="h-[350px]">
                        <div class="pt-5">
                            <div class="text-2xl font-semibold">
                                All Under $40
                            </div>
                            <a href="" class="">
                                <div class="text-xl text-gray-400 hover:text-[#2DBE78] hover:font-semibold">
                                    Explore Now >
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="bg-[#2DBE78] h-[300px] text-center p-10 mt-20">
            <div class="pt-5 text-white font-extrabold text-3xl">
                JOIN RENT COMMUNITY TO GET <br> MONTHLY PROMO
            </div>
            <div class="font-semibold tracking-wide">
                Type your email down below and be young wild generation
            </div>
            <div>
                <div class="flex flex-row justify-center items-center mt-5">
                    <input type="email" name="email" id="email" placeholder="Your Email"
                        class="bg-white rounded-full w-[300px] h-[40px] px-5">
                    <button class="bg-white justify-center items-center rounded-full w-[40px] h-[40px] ml-2">
                        <ion-icon name="send" class="text-[#2DBE78]"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
