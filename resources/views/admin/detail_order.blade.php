@extends('layouts.admin')
@section('title', 'User Dashboard | Admin')

@section('main')

    <div class="w-100 mx-auto">
        <div class="flex flex-col items-center justify-center w-100 mt-20">
            <div class="text-[#2DBE78] font-semibold text-2xl mb-4">User Detail</div>
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
                            <td class="px-4 py-2">User ID</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $order->user_id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Item ID</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $order->item_id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Qty</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $order->qty }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Total Harga</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                {{ $order->total_harga }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Deposit</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                {{ $order->deposit }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Status</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $order->status }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Start Date</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $order->start_date }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">End Date</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $order->end_date }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Address</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                @foreach ($order->address as $item)
                                    {{ $item }},&nbsp;
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Created At</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                {{ $order->created_at }}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Updated At</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                {{ $order->updated_at }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="/admin/order"
                    class="mt-8 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-modal-toggle="popup-modal">
                    Back
                </a>
            </div>
        </div>
    </div>

@endsection
