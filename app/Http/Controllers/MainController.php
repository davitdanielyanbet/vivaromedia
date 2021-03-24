<?php

namespace App\Http\Controllers;

use App\Models\User;

class  MainController extends Controller
{
    public function index()
    {
        $users = User::with('userAccount')->orderBy('id', 'ASC')->simplePaginate(4);
        return view('index', compact('users'));
    }
}
