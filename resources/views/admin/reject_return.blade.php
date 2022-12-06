@extends('layouts.admin')
@section('title', 'Return Dashboard | Admin')

@section('main')

    <div class="w-100 mx-auto">
        <div class="flex flex-col items-center justify-center w-100 mt-20">
            <div class="text-[#2DBE78] font-semibold text-2xl mb-4">Reject Return</div>
            <div class="flex flex-col items-center justify-center">
                <!-- table (order_id, status, action[detail, edit, delete]) -->
                <table class="table-fixed ">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2">Return ID</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $data->id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Return Status</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $data->status }}</td>
                        </tr>
                    </tbody>
                </table>
                <form class="w-100" action="/admin/return/update/{{ $data->id }}" method="POST">
                    @csrf
                    <label for="reject_msg">Reject Message</label><br>
                    <textarea name="reject_msg" id="rejec" cols="30" rows="10"></textarea>
                    <div class="flex justify-center gap-3">
                        <button type="submit"
                            class="mt-8 block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                            type="button" data-modal-toggle="popup-modal">
                            Reject
                        </button>
                        <a href="/admin/return"
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
