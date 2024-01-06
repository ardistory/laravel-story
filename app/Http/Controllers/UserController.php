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
}
