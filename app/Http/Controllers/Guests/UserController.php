<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class UserController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }
}
