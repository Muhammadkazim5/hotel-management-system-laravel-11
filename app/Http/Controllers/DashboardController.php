<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Gallery;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $rooms = Room::all();
        $gallerys = Gallery::all();
        return view('home.index', compact('rooms', 'gallerys'));
    }
    public function home()
    {
        $rooms = Room::all();
        $gallerys = Gallery::all();
        return view('home.index', compact('rooms', 'gallerys'));
    }

}
