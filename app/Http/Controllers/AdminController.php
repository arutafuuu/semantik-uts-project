<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View|Factory|Application
    {
        $movies = Movie::all();
        return view('admin', compact('movies'));
    }
}
