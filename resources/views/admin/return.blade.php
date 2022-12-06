@extends('layouts.admin')
@section('title', 'Return Dashboard | Admin')

@section('main')

    <div class="w-100 mx-auto">
        <div class="flex flex-col items-center justify-center w-100 mt-20">
            <div class="text-[#2DBE78] font-semibold text-2xl mb-4">Returned Menu</div>
            <div class="flex flex-col items-center justify-center">
                <!-- table (order_id, status, action[detail, edit, delete]) -->
                <table class="table-fixed min-w-[1000px] text-center">
                    <thead>
                        <tr>
                            <th class="w-1/4 px-4 py-2">Return ID</th>
                            <th class="w-1/4 px-4 py-2">User ID</th>
                            <th class="w-1/4 px-4 py-2">Status</th>
                            <th class="w-1/4 px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengembalianData as $data)
                            <tr>
                                <td class="border px-4 py-2">{{ $data->id }}</td>
                                <td class="border px-4 py-2">{{ $data->user_id }}</td>
                                <td class="border px-4 py-2">{{ $data->status }}</td>
                                <td class="border px-4 py-2 ">
                                    <div class="flex justify-center gap-3">
                                        <button onclick="window.location.href='/admin/return/detail/{{ $data->id }}'"
                                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button" data-modal-toggle="popup-modal">
                                            Detail
                                        </button>
                                        <button onclick="window.location.href='/admin/return/edit/{{ $data->id }}'"
                                            class="block text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"
                                            type="button" data-modal-toggle="popup-modal">
                                            Edit
                                        </button>
                                        <button onclick="window.location.href='/admin/return/reject/{{ $data->id }}'"
                                            class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                            type="submit" data-modal-toggle="popup-modal">
                                            Reject
                                        </button>

                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
