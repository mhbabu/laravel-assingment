<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserFile;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['totalUsers'] = User::count();
        $data['authUserTotalFile'] = auth()->user()->user_type == 4 ? UserFile::where('user_id', auth()->user()->id)->count() : UserFile::count();
        return view('backend.dashboard', $data);
    }
}
