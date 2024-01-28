<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view ('auth.login');
    }
}
