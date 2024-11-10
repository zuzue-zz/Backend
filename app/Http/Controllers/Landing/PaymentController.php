<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index($movie_id)
    {
        $movie = Movie::find($movie_id);
        return view('landing.payment', compact('movie'));
    }
}
