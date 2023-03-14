<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class UserController extends Controller
{
    //
    public function show( string $id = NULL): View
    {
        $user= ['name'=>'moses'];
        // print_r($user);
        // die;
        return view('user.profile', ['name'=>['moses','mukesh','tozo']]);
    }
}
