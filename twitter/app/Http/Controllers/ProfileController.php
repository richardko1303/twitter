<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $users = [
            [
                "name" => "John Doe",
                "age" => 30,
            ],
            [
                "name" => "Skibidi Rizzler",
                "age" => 14,
            ],
            [
                "name" => "John Dom",
                "age" => 17,
            ],
        ];



        return view('profile', [
            'users' => $users,
        ]);
    }
}
