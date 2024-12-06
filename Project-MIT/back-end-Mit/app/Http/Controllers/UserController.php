<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("user.user.index", compact('users'));
    }

    public function create()
    {
        return view("user.user.add_or_edit_user");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('users')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $userEdit = User::findOrFail($id);
        return view("user.user.add_or_edit_user", compact('userEdit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:8',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('users')->with('success', 'User updated successfully.');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users')->with('delete', 'User deleted successfully.');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("user.user.view_user", compact('user'));
    }

    public function search(Request $request)
    {
        $query = User::query();
        if ($request->has('search') && $request->search != '') {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $users = $query->get();
        return view('user.user.index', compact('users'));
    }
}
