<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateInitialUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            "name"      => "Initial User",
            "email"     => "initial-user@email.com",
            "password"  => "12345678",
            "cellphone" => "(41)99999-9999",
            "credicard" => "1234-1234-1234-1234"
        ];

        $user = User::query()->where("email", "initial-user@email.com")->first();

        if ($user == null) {
            $user = User::create($attributes);
        }
    }
}
