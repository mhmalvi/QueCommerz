<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        $request->update();

        return response()->json([
            'message' => "Successfully updated your profile!",
        ], 200);
    }

    public function changePasswordIndex()
    {
        return view('change_password');
    }
}
