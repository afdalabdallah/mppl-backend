@extends('layouts.app')

@section('title', 'Admin dashboard')

@section('main')
    <div class="flex">
        <div class="bg-[#2DBE78] h-screen w-[250px]">
            <div class="flex flex-col items-center justify-center h-[100px] ">
                <img src="/img/profile.png" alt="avatar" class="h-[70px] w-[70px] rounded-full" />
                <div class="text-white font-semibold text-lg mt-2">John Doe</div>
            </div>
            <div class="mt-20">
                <!-- add item button -->
                <div class="flex flex-row items-center justify-center mt-5">
                    <button
                        class="bg-white text-[#2DBE78] hover:bg-gray-400 font-semibold hover:text-white py-2 px-4 rounded-sm w-[200px]">
                        Add Item
                    </button>
                </div>
            </div>
            <div>
                <div class="flex flex-row items-center justify-center mt-5">
                    <button
                        class="bg-white text-[#2DBE78] hover:bg-gray-400 font-semibold hover:text-white py-2 px-4 rounded-sm w-[200px]">
                        Order Menu
                    </button>
                </div>
            </div>
            <div>
                <div class="flex flex-row items-center justify-center mt-5">
                    <button
                        class="bg-white text-[#2DBE78] hover:bg-gray-400 font-semibold hover:text-white py-2 px-4 rounded-sm w-[200px]">
                        User Menu
                    </button>
                </div>
            </div>
        </div>
        <form class="w-100 mx-auto" action="/admin/insert" method="post">
            @csrf
            {{-- <div>
            <label for="name">Name</label><br>
            <input style="border: 1px solid" type="text" name="name" />
        </div>
        <div>
            <label for="size">Size</label><br>
            <input style="border: 1px solid" type="text" name="size" />
        </div>
        <div>
            <label for="merek">merek</label><br>
            <input style="border: 1px solid" type="text" name="merek" />
        </div>
        <div>
            <label for="color">color</label><br>
            <input style="border: 1px solid" type="text" name="color" />
        </div>
        <div>
            <label for="description">description</label><br>
            <input style="border: 1px solid" type="text" name="description" />
        </div>
        <div>
            <label for="model_height">model_height</label><br>
            <input style="border: 1px solid" type="text" name="model_height" />
        </div>
        <div>
            <label for="category">category</label><br>
            <input style="border: 1px solid" type="text" name="category" />
        </div>
        <div>
            <label for="stock">stock</label><br>
            <input style="border: 1px solid" type="text" name="stock" />
        </div>
        <div>
            <label for="harga">harga</label><br>
            <input style="border: 1px solid" type="text" name="harga" />
        </div>

        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <div>
            <label for="img">Img</label><br>
            <input style="border: 1px solid" type="text" name="img[]" />
        </div>
        <button type="submit">Submit</button> --}}
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
                                <input name="description" type="text"
                                    class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                            </div>
                            <div class="flex flex-col items-center justify-center ml-10">
                                <div class="text-[#2DBE78] font-semibold text-lg">Model Height</div>
                                <input name="model_height" type="text"
                                    class="border-[#2DBE78] border-2 rounded-lg mt-2" />
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
                                    <input name="img[]" type="file"
                                        class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                                </div>
                                <div class="flex flex-col items-center justify-center ml-10">
                                    <div class="text-[#2DBE78] font-semibold text-lg">Image 2</div>
                                    <input name="img[]" type="file"
                                        class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-center mt-5">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="text-[#2DBE78] font-semibold text-lg">Image 3</div>
                                    <input name="img[]" type="file"
                                        class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                                </div>
                                <div class="flex flex-col items-center justify-center ml-10">
                                    <div class="text-[#2DBE78] font-semibold text-lg">Image 4</div>
                                    <input name="img[]" type="file"
                                        class="border-[#2DBE78] border-2 rounded-lg mt-2" />
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-center mt-5">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="text-[#2DBE78] font-semibold text-lg">Image 5</div>
                                    <input name="img[]" type="file"
                                        class="border-[#2DBE78] border-2 rounded-lg mt-2" />
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

    </div>

@endsection
