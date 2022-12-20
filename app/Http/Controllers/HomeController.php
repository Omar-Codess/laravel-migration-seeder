<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_time', '>=', now())->get();
        return view('trains.index', compact('trains'));
    }
}
