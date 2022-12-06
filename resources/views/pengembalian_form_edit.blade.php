@extends('layouts.app')
@section('title', 'Return Edit | Pakai.in')

@section('main')
    <div class="flex flex-row justify-start pt-10 pl-20">
        <div class="">
            <a href="/pengembalian">
                <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center justify-center mb-10">
        <div class="flex flex-col items-center justify-center">
            <div class="text-3xl font-bold text-[#2DBE78] mt-10">
                Edit Return Form
            </div>
            <div class="text-xl font-semibold text-[#2DBE78] mt-5">
                Please fill in the form below
            </div>
            <div>{{ $errorMsg }}</div>
        </div>
        <div class="flex flex-col items-center justify-center mt-10">
            <form action="/pengembalian/update" method="post">
                @csrf

                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Order Code
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <input required name="order_id" type="text"
                                class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5"
                                placeholder="Order Code" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Name
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <input required name="name" type="text"
                                class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5" placeholder="Name" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Address
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <input required name="address" type="text"
                                class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5"
                                placeholder="Address" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Phone Number
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <input required name="no_telp" type="text"
                                class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5"
                                placeholder="Phone Number" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Bank/E-Wallet
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <div class="flex flex-row items-center justify-center">
                                <input required value="BCA" type="radio" name="bank" id="bca"
                                    class="h-[20px] w-[20px]" />
                                <label for="bca" class="ml-2">BCA</label>
                            </div>
                            <div class="flex flex-row items-center justify-center ml-5">
                                <input required value="BNI" type="radio" name="bank" id="bni"
                                    class="h-[20px] w-[20px]" />
                                <label for="bni" class="ml-2">BNI</label>
                            </div>
                            <div class="flex flex-row items-center justify-center ml-5">
                                <input value="BRI" type="radio" name="bank" id="bri"
                                    class="h-[20px] w-[20px]" />
                                <label for="bri" class="ml-2">BRI</label>
                            </div>
                            <div class="flex flex-row items-center justify-center ml-5">
                                <input value="Mandiri" type="radio" name="bank" id="mandiri"
                                    class="h-[20px] w-[20px]" />
                                <label for="mandiri" class="ml-2">Mandiri</label>
                            </div>
                            <div class="flex flex-row items-center justify-center ml-5">
                                <input value="Gopay" type="radio" name="bank" id="gopay"
                                    class="h-[20px] w-[20px]" />
                                <label for="gopay" class="ml-2">Gopay</label>
                            </div>
                            <div class="flex flex-row items-center justify-center ml-5">
                                <input value="OVO" type="radio" name="bank" id="ovo"
                                    class="h-[20px] w-[20px]" />
                                <label for="ovo" class="ml-2">OVO</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Rekening/Nomer E-Wallet
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <input required name="nomor_bank" type="text"
                                class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5"
                                placeholder="Rekening/Nomer E-Wallet" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            No Resi
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <input required name="no_resi" type="text"
                                class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5"
                                placeholder="No Resi" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Foto Resi
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <input required name="foto_resi" type="file"
                                class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5 text-md" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Foto Paket
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2 text-center">
                            <input required name="foto_paket" type="file"
                                class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5 text-md" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <div class="text-xl font-semibold text-[#2DBE78]">
                            Note
                        </div>
                        <div class="flex flex-row items-center justify-center mt-2">
                            <textarea name="note" type="text" class="border-2 border-[#2DBE78] rounded-full w-[300px] h-[40px] px-5"
                                placeholder="Note"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5">
                        <button type="submit" class="bg-[#2DBE78] text-white rounded-full w-[300px] h-[40px]">
                            Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
