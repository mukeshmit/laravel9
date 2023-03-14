<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
     /**
         * Show the profile for a given user.
    */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => []
        ]);
    }
}
