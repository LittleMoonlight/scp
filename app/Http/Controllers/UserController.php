<?php

namespace App\Http\Controllers;

use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pengguna.index', [
            'user' => auth()->user(),
        ]);
    }

    public function getUsers(DataTables $dataTables)
    {
        return $dataTables->eloquent(User::query())->make(true);
    }
}
