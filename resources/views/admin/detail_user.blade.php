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
                            <td class="px-4 py-2">User ID</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">User Name</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Email</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">No Telp</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $user->no_telp }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">ID Card</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                <img class="h-[200px]" src="/img/profile/{{ $user->id_card }}" />
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Selfie wit ID Card</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">
                                <img class="h-[200px]" src="/img/profile/{{ $user->selfie_id }}" />
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Status</td>
                            <td class="px-4 py-2">:</td>
                            <td class="px-4 py-2">{{ $user->verified_status }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="/admin/user"
                    class="mt-8 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-modal-toggle="popup-modal">
                    Back
                </a>
            </div>
        </div>
    </div>

@endsection
