<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myProfile()
    {
        $user = auth()->user();

        return view("users.myProfile", [
            "user" => $user
        ]);
    }

    public function updateUser(Request $request)
    {
        dd($request);
    }
}
