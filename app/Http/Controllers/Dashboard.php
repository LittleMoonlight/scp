<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Dashboard extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index()
    {
        return view('dashboard', [
            'user' => auth()->user()
        ]);
    }
}
