<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function edit(Request $request)
    {
        $user = User::findOrFail($request->user()->id);
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->user()->id);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed', 
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        $request->session()->flash('success', 'Profile updated successfully!');
        return redirect()->route('admin.profile');
    }
}
