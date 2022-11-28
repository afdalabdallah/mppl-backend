@extends('layouts.app')

@section('title', 'Catalog | Pakai.in')

@section('main')
    <div>
        <div class="p-16 flex">
            <div class="w-[78%]">
                <div class="flex flex-col gap-10">
                    <div class="grid gap-y-8 grid-cols-3 items-center mx-auto" style="width:90%">
                        @foreach ($pakaianCatalog as $item)
                            <div style="width: 70%; margin:auto;">
                                <a href="/item/{{ $item->id }}">
                                    <img style="border-radius: 12px" src="{{ asset("/img/item/{$item->img[0]}") }}"
                                        alt="" class="h-[450px]">
                                    <h1 class="pt-3 font-semibold">{{ $item->name }}</h1>
                                    <H2 class="font-semibold text-gray-400">{{ $item->merek }}</H2>
                                    <h3 class="text-sm">Rp {{ $item->harga }}/DAY</h3>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex justify-center">
                        <!-- page selector (2 page) -->
                        <div class="flex flex-row gap-2">
                            <div class="w-8 h-8 bg-gray-200 rounded-full flex justify-center items-center">
                                <ion-icon name="chevron-back-outline"></ion-icon>
                            </div>
                            <div class="w-8 h-8 bg-gray-200 rounded-full flex justify-center items-center">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[4%] font-extralight text-center">
                <div>-----</div>
                <br><br><br><br>
                <div>-----</div>
                <br><br><br><br><br>
                <div>-----</div>
            </div>
            <div class="w-[18%] font-medium">
                <button class="text-[#2DBE78]">WOMAN</button><br>
                <button>MAN</button> <br>
                <button>KIDS</button><br><br><br>
                <button class="text-[#2DBE78]">ZARA</button><br>
                <button>UNIQLO</button><br>
                <button>BALENCIAGA</button><br>
                <button>LOUIS VUITTON</button><br><br><br>
                <div>
                    <h1>Size</h1>
                    <h2 class="text-gray-500 font-extralight">Choose your size</h2>
                    <div>
                        <!-- checkbox for sizes filter-->
                        <div class="flex flex-row gap-24">
                            <div class="flex flex-col gap-1 mt-2">
                                <div class="flex flex-row items-center">
                                    <input type="checkbox" name="size" id="size"
                                        class="form-checkbox h-4 w-4 text-[#2DBE78]">
                                    <label for="size" class="ml-1 text-xs text-black">XS</label>
                                </div>
                                <div class="flex flex-row items-center">
                                    <input type="checkbox" name="size" id="size"
                                        class="form-checkbox h-4 w-4 text-[#2DBE78]">
                                    <label for="size" class="ml-1 text-xs text-black">S</label>
                                </div>
                                <div class="flex flex-row items-center">
                                    <input type="checkbox" name="size" id="size"
                                        class="form-checkbox h-4 w-4 text-[#2DBE78]">
                                    <label for="size" class="ml-1 text-xs text-black">M</label>
                                </div>
                                <div class="flex flex-row items-center">
                                    <input type="checkbox" name="size" id="size"
                                        class="form-checkbox h-4 w-4 text-[#2DBE78]">
                                    <label for="size" class="ml-1 text-xs text-black">L</label>
                                </div>
                                <div class="flex flex-row items-center">
                                    <input type="checkbox" name="size" id="size"
                                        class="form-checkbox h-4 w-4 text-[#2DBE78]">
                                    <label for="size" class="ml-1 text-xs text-black">XL</label>
                                </div>
                                <div class="flex flex-row items-center">
                                    <input type="checkbox" name="size" id="size"
                                        class="form-checkbox h-4 w-4 text-[#2DBE78]">
                                    <label for="size" class="ml-1 text-xs text-black">XXL</label>
                                </div>
                            </div>
                            <div class="flex justify-center items-center font-extralight underline">
                                <a download="size_chart" href="/img/catalog/sizechart.jpg">Size Guide</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
