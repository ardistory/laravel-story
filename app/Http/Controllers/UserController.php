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
    public function getDocumentation(): Response
    {
        return response()->view('documentation');
    }
    public function getChecklist(): Response
    {
        return response()->view('checklist');
    }
    public function getSetting(): Response
    {
        return response()->view('setting');
    }
}
