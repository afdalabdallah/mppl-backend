@extends('layouts.app')

@section('title', 'Browse | Pakai.in')

@section('main')
    <div>
        <div class="flex flex-row pt-16 pl-16 pr-16 pb-0">
            <div class="w-[60%]">
                <div class="flex flex-row ml-[200px]">
                    <div class="flex">
                        <!-- main image -->
                        <img src="{{ asset("/img/item/{$detailItem->img[0]}") }}" alt="" class="h-[800px]">
                    </div>
                    <div class="flex flex-col gap-2 justify-between">
                        <div class="">

                            <img src="{{ asset("/img/item/{$detailItem->img[1]}") }}" alt="" class="h-[190px]">
                        </div>
                        <div class="">

                            <img src="{{ asset("/img/item/{$detailItem->img[2]}") }}" alt="" class="h-[190px]">
                        </div>
                        <div class="">

                            <img src="{{ asset("/img/item/{$detailItem->img[3]}") }}" alt="" class="h-[190px]">
                        </div>
                        <div class="">
                            <img src="{{ asset("/img/item/{$detailItem->img[4]}") }}" alt="" class="h-[190px]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[40%]">
                <h1 class="font-normal text-4xl tracking-wide">{{ $detailItem->name }} <br>
                    <h2 class="font-normal text-2xl tracking-wide">Rp {{ $detailItem->harga }}/DAY</h2>

                    <div class="flex flex-row gap-7 font-medium mt-10">
                        <div class="">
                            <h3 class="text-[#2DBE78]">Description</h3> <br>
                            <h4>{{ $detailItem->description }}
                            </h4>
                        </div>
                        <div class="">
                            <h3 class="text-[#2DBE78]">Summary</h3><br>
                            <h4>Color: {{ $detailItem->color }}</h4>
                            <h4>Height of model: {{ $detailItem->model_height }} cm</h4>
                        </div>
                    </div>
                    <div class="mt-10 flex flex-row gap-36">
                        <div>
                            <div>
                                <div class="flex flex-col gap-2 mt-4">
                                    <div class="flex flex-col">
                                        <h3 class="text-black">Start Date</h3>
                                        <input type="date" name="start_date"
                                            class="border border-black rounded-sm h-[35px] w-[200px] date-start">
                                    </div>
                                    <div class="flex flex-col">
                                        <h3 class="text-black">End Date</h3>
                                        <input type="date" name="end_date"
                                            class="border border-black rounded-sm h-[35px] w-[200px] date-end">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <button id="dropdown" data-dropdown-toggle="dropdown"
                                class="bg-white h-[35px] w-[200px] flex text-center justify-center align-middle border border-black rounded-sm gap-4 p-1">
                                <div class="text-[15px]">
                                    Choose Size &nbsp;<span class="size-dropdown font-bold"></span>
                                </div>
                                <div>
                                    <!-- ionicon -->
                                    <ion-icon name="chevron-down-outline" class="mt-1"></ion-icon>
                                </div>
                            </button>
                            <div id="dropdown-menu" class="hidden z-10 w-[200px] bg-white justify-end">
                                <ul class="py-1 text-sm shadow-md border" aria-labelledby="dropdownDefault">
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-300 text-center option">{{ $detailItem->size }}</a>
                                    </li>
                                </ul>
                            </div>

                            <button
                                class="absolute mt-[32px] bg-black text-[#2DBE78] h-[35px] w-[200px] flex text-center justify-center align-middle border border-black rounded-sm gap-4 p-1 hover:text-black hover:bg-[#2DBE78]">
                                <div class="text-[15px]">
                                    Add to Cart <ion-icon name="add-outline"></ion-icon>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-[#2DBE78] mt-10 font-medium">MATCH WITH</h3>
                        <div class="flex flex-row justify-start gap-5">
                            <div class="space-y-[-4px]">
                                <img src="/img/catalog/7.png" alt="" class="h-[250px]">
                                <h1 class="pt-3 font-semibold">TEXTURED SWEATER <br> WITH THREAD</h1>
                                <H2 class="font-semibold text-gray-400">ZARA</H2>
                                <h3 class="text-sm">Rp. 90.000/DAY</h3>
                            </div>
                            <div class="space-y-[-4px]">
                                <img src="/img/catalog/8.png" alt="" class="h-[250px]">
                                <h1 class="pt-3 font-semibold">LACE-TRIMMED SATIN <br> JUMPSUIT</h1>
                                <H2 class="font-semibold text-gray-400">ZARA</H2>
                                <h3 class="text-sm"><span class="line-through text-gray-400">Rp. 240.000/DAY <br></span> Rp.
                                    180.000/DAY</h3>
                            </div>
                            <div class="space-y-[-4px]">
                                <img src="/img/catalog/9.png" alt="" class="h-[250px]">
                                <h1 class="pt-3 font-semibold">OVERSHIRT WITH <br> POCKETS</h1>
                                <H2 class="font-semibold text-gray-400">ZARA</H2>
                                <h3 class="text-sm">Rp. 130.000/DAY</h3>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class=" bg-white">
            <div class="font-extrabold text-5xl p-10 tracking-tighter ml-[150px]">SIMILAR ITEMS</div>
            <div class="flex items-center justify-evenly mt-10">
                <div>
                    <img src="/img/catalog/1.png" alt="" class="h-[400px]">
                    <h1 class="pt-3 font-semibold">TEXTURED SWEATER <br> WITH THREAD</h1>
                    <H2 class="font-semibold text-gray-400">ZARA</H2>
                    <h3 class="text-sm">Rp. 90.000/DAY</h3>
                </div>
                <div>
                    <img src="/img/catalog/2.png" alt="" class="h-[400px]">
                    <h1 class="pt-3 font-semibold">LACE-TRIMMED SATIN <br> JUMPSUIT</h1>
                    <H2 class="font-semibold text-gray-400">ZARA</H2>
                    <h3 class="text-sm"><span class="line-through text-gray-400">Rp. 240.000/DAY <br></span> Rp.
                        180.000/DAY</h3>
                </div>
                <div>
                    <img src="/img/catalog/4.png" alt="" class="h-[400px]">
                    <h1 class="pt-3 font-semibold">OVERSHIRT WITH <br> POCKETS</h1>
                    <H2 class="font-semibold text-gray-400">ZARA</H2>
                    <h3 class="text-sm">Rp. 130.000/DAY</h3>
                </div>
                <div>
                    <img src="/img/catalog/5.png" alt="" class="h-[400px]">
                    <h1 class="pt-3 font-semibold">TEXTURED SWEATER <br> WITH THREAD</h1>
                    <H2 class="font-semibold text-gray-400">ZARA</H2>
                    <h3 class="text-sm">Rp. 90.000/DAY</h3>
                </div>
            </div>
        </div>
    </div>
    <script>
        // dropdown size show/hide

        const dropdown = document.getElementById("dropdown");
        const dropdownMenu = document.getElementById("dropdown-menu");

        dropdown.addEventListener("click", () => {
            dropdownMenu.classList.toggle("hidden");
        });

        // replace &nbsp with selected size on click

        const sizeOptions = document.getElementsByClassName("option");
        const sizeDropdown = document.getElementsByClassName("size-dropdown");

        for (let i = 0; i < sizeOptions.length; i++) {
            sizeOptions[i].addEventListener("click", () => {
                sizeDropdown[0].innerHTML = sizeOptions[i].innerHTML;
            });
        }
    </script>
@endsection