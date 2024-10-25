<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.Dashboard');
    }

    public function form()
    {
        return view('admin.form');
    }

    public function add_user(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'role' => 'required|string|in:teacher,student,analyst', 
        ]);

        // Create the user with selected role
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, 
        ]);

        return redirect()->route('user_detail')->with('success', 'User added successfully!');
    }

    public function user_detail()
    {
        $users = User::all();
        return view('admin.user_detail', compact('users'));
    }


}
