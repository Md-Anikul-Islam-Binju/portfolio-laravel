<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.adminDashboard');
    }

    public function adminLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
