<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Dashboard()
    {
        // $UserCount = User::count();
        return view('Admin.dashboard');
    }

    public function Voting()
    {
        // $UserCount = User::count();
        return view('Admin.voting');
    }
}
