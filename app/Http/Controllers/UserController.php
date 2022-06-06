<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return User::paginate();
    }

    public function store(Request $request)
    {
        $request['password'] = bcrypt('password');

        User::create($request->all());
        return ['message' => 'data has been save'];
    }
}
