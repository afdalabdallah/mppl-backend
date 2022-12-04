<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
        // return ($request->user());
    }

    public function getUser($id)
    {
        $table = DB::table('users')->where('id', $id)->get()->first();
        return ($table);
    }

    public function getUserAdmin($id)
    {
        $table = DB::table('users')->where('id', $id)->get()->first();
        return view('admin.detail_user')->with(['user' => $table]);
    }

    public function getAllUser()
    {
        $table = DB::table('users')->where('role', '!=', 'admin')->where('verified_status', '!=', 'not_verified')->get();
        return view('admin.user')->with(['userData' => $table]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->get()->first();

        if (Request()->id_card == null) {
            Request()->id_card = $user->id_card;
        }

        if (Request()->selfie_id == null) {
            Request()->selfie_id = $user->selfie_id;
        }
        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'no_telp' => Request()->no_telp,
            'id_card' => Request()->id_card,
            'selfie_id' => Request()->selfie_id,
            'updated_at' => Carbon::now(),
        ];
        DB::table('users')->where('id', $id)->update($data);
        // return ($request);
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updateStatus()
    {
        $id = Auth::id();
        DB::table('users')->where('id', $id)->update(['verified_status' => 'pending']);
        return redirect('profile');
    }

    public function acceptVerify($id)
    {
        DB::table('users')->where('id', $id)->update(['verified_status' => 'verified']);
        return redirect('/admin/user');
    }

    public function rejectVerify($id)
    {
        DB::table('users')->where('id', $id)->update(['verified_status' => 'not_verified']);
        return redirect('/admin/user');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
