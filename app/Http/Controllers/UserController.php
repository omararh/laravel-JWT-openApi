<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function createUser(Request $request) {
        $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->input('email'),
            "password" => $request->input("password"),
        ]);
    }

    public function getUsers() {
        return User::all();
    }
}
