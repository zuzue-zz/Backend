<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Seat;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index($movie_id){

        $movie = Movie::findOrFail($movie_id);

        return view('landing.seat', compact('movie' ));

    }
}
