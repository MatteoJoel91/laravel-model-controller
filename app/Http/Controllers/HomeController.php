<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('home', compact('movies'));

    }

    public function contactUs(){

        return view('contatti');

    }
}
