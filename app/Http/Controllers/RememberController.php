<?php

namespace App\Http\Controllers;

use App\Models\Remember;
use Illuminate\Http\Request;

class RememberController extends Controller
{
    public function index()
    {
        $remembers = Remember::orderBy('id', 'desc')->get();
        return view('remembers.list', ['remembers' => $remembers]);
    }
}
