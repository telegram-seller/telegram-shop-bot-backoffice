<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        $user = auth()->user();

        return view("user.edit", [
            "user" => $user
        ]);
    }
}
