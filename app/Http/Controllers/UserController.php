<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        return view('users.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        Auth::user()->update($request->only(['background_color', 'text_color']));

        return redirect()->back()->with(['success' => 'Successfully Changed!']);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
