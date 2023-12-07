<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statement;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function task()
    {
        return view('tasks');
    }
    public function category()
    {
        return view('category');
    }
}
