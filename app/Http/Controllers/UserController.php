<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show all users
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Show form for creating a new user
    public function create()
    {
        return view('users.create');
    }

    // Store a new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'role' => 'required|string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Save the role
        ]);

        return redirect()->route('users.create')->with('success', 'User created successfully');
    }

    // Show the form for editing a user
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

public function update(Request $request, User $user)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:6|confirmed',
        
    ]);

    // Update the user data
    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->password) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('users.index')->with('success', 'User updated successfully');
}


    // Delete a user
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}