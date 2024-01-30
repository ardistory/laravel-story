<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function getDashboard(): Response
    {
        return response()->view('dashboard');
    }

    public function getIp(): Response
    {
        return response()->view('ip');
    }
    public function getUsers(): Response
    {
        return response()->view('list-users');
    }
}
