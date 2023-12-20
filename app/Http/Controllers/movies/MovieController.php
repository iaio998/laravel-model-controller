<?php

namespace App\Http\Controllers\movies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view("movies.index");
    }
}
