@extends('layouts.admin')

@section('title', 'Admin dashboard')

@section('main')

    <form class="w-100 mx-auto" action="/admin/insert" method="post">
        @csrf
        <div class="flex flex-col items-center justify-center">
            <div class="text-[#2DBE78] font-semibold text-2xl mt-10">Add Item</div>
            <div class="flex flex-col items-center justify-center mt-10">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-row items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <div class="text-[#2DBE78] font-semibold text-lg">Item Name</div>
                            <input name="name" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                        <div class="flex flex-col items-center justify-center ml-10">
                            <div class="text-[#2DBE78] font-semibold text-lg">Size</div>
                            <input name="size" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-center mt-5">
                        <div class="flex flex-col items-center justify-center">
                            <div class="text-[#2DBE78] font-semibold text-lg">Brand</div>
                            <input name="merek" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                        <div class="flex flex-col items-center justify-center ml-10">
                            <div class="text-[#2DBE78] font-semibold text-lg">Color</div>
                            <input name="color" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-center mt-5">
                        <div class="flex flex-col items-center justify-center">
                            <div class="text-[#2DBE78] font-semibold text-lg">Description</div>
                            <input name="description" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                        <div class="flex flex-col items-center justify-center ml-10">
                            <div class="text-[#2DBE78] font-semibold text-lg">Model Height</div>
                            <input name="model_height" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-center mt-5">
                        <div class="flex flex-col items-center justify-center">
                            <div class="text-[#2DBE78] font-semibold text-lg">Category</div>
                            <input name="category" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                        <div class="flex flex-col items-center justify-center ml-10">
                            <div class="text-[#2DBE78] font-semibold text-lg">Stock</div>
                            <input name="stock" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-center mt-5">
                        <div class="flex flex-col items-center justify-center">
                            <div class="text-[#2DBE78] font-semibold text-lg">Harga</div>
                            <input name="harga" type="text" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-row items-center justify-center mt-5">
                            <div class="flex flex-col items-center justify-center">
                                <div class="text-[#2DBE78] font-semibold text-lg">Image 1</div>
                                <input name="img[]" type="file" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                            </div>
                            <div class="flex flex-col items-center justify-center ml-10">
                                <div class="text-[#2DBE78] font-semibold text-lg">Image 2</div>
                                <input name="img[]" type="file" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-row items-center justify-center mt-5">
                            <div class="flex flex-col items-center justify-center">
                                <div class="text-[#2DBE78] font-semibold text-lg">Image 3</div>
                                <input name="img[]" type="file" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                            </div>
                            <div class="flex flex-col items-center justify-center ml-10">
                                <div class="text-[#2DBE78] font-semibold text-lg">Image 4</div>
                                <input name="img[]" type="file" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-row items-center justify-center mt-5">
                            <div class="flex flex-col items-center justify-center">
                                <div class="text-[#2DBE78] font-semibold text-lg">Image 5</div>
                                <input name="img[]" type="file" class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                            </div>
                        </div>
                    </div>
                    <!-- Apply Changes button -->
                    <div class="flex flex-row items-center justify-center mt-10">
                        <button type="submit"
                            class="bg-[#2DBE78] hover:text-[#2DBE78] hover:bg-black text-white font-semibold text-lg rounded-lg px-10 py-2">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
