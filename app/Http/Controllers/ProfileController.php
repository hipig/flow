<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(ProfileRequest $request)
    {
        $user = Auth::user();

        $user->fill($request->only('name', 'email'));

        if ($request->has('password')) {
            $user->password = $request->password;
        }

        $user->save();

        return back()->with('success', '编辑个人资料成功');
    }
}
