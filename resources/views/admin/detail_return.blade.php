@extends('layouts.admin')
@section('title', 'Return Detail | Pakai.in')

@section('main')
    <div class="w-100 mx-auto mb-20">
        <div class="flex flex-col items-center justify-center w-100 mt-20">
            <div class="text-[#2DBE78] font-semibold text-2xl mb-4">Return Detail</div>
            <div class="flex flex-col items-center justify-center">
                <!-- table (order_id, status, action[detail, edit, delete]) -->
                <table class="table-fixed  ">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2">Return ID</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Order ID</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->order_id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">User ID</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->user_id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">No Telp</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->no_telp }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Bank</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->bank }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Nomor Bank/E-money</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->nomor_bank }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Nomor Resi</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->no_resi }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Note</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->note }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Status</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $pengembalianData->status }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Deposit</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">RP {{ $pengembalianData->deposit }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">ID Card</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                <img class="h-[200px]" src="/img/return/{{ $pengembalianData->foto_resi }}" />
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Selfie wit ID Card</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                <img class="h-[200px]" src="/img/return/{{ $pengembalianData->foto_paket }}" />
                            </td>
                        </tr>

                    </tbody>
                </table>
                <a href="/admin/return"
                    class="mt-8 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-modal-toggle="popup-modal">
                    Back
                </a>
            </div>
        </div>
    </div>
@endsection
