<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        // Uncomment for debugging
        // dd($users);

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function show(string $id)
    {
        $user = User::find($id);

        // Uncomment for debugging
        // dd($users);

        return view('users.show', [
            'user' => $user
        ]);
    }
} 