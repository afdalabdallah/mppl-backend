@extends('layouts.admin')
@section('title', 'Order Dashboard | Admin')

@section('main')

    <div class="w-100 mx-auto">
        <div class="flex flex-col items-center justify-center w-100 mt-20">
            <div class="text-[#2DBE78] font-semibold text-2xl mb-4">Change Order Status</div>
            <div class="flex flex-col items-center justify-center">
                <!-- table (order_id, status, action[detail, edit, delete]) -->
                <table class="table-fixed  text-center">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2">Order ID</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Order Status</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $order->status }}</td>
                        </tr>
                    </tbody>
                </table>
                <form class="w-100" action="/admin/order/update/{{ $order->id }}" method="POST">
                    @csrf
                    <label for="status">Change Status</label>

                    <select name="status" id="status" class="min-w-[100px]">
                        <option value="process">Process</option>
                        <option value="sent">Sent</option>
                        <option value="received">Received</option>
                        <option value="received_back">Received Back</option>
                    </select>
                    <div class="flex justify-center gap-3">
                        <button type="submit"
                            class="mt-8 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="popup-modal">
                            Save
                        </button>
                        <a href="/admin/order"
                            class="mt-8 block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            type="button" data-modal-toggle="popup-modal">
                            Back
                        </a>
                    </div>

                </form class="w-100">



            </div>
        </div>
    </div>

@endsection
