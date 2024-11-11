<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use App\Models\Showtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showNowMovies = Showtime::with('movie') // Eager load the related movies
        ->where('show_date', '>=', now()->format('Y-m-d')) // Filter show_date to today or later
        ->paginate(8);

        // Retrieve popular movies ordered by rating in descending order
        $popularMovies = Movie::orderBy('rating', 'desc')->paginate(8);

        $featuredMovies = Movie::where('featured', 'true')->orderBy('rating', 'desc')->paginate(8);

        $category = Category::where('name','Animation')->first();

        $animationMovies = $category ?  Movie::where('category_id',$category->id)->orderBy('rating', 'desc')->paginate(8) : null;

        return view('landing.home',compact('showNowMovies','popularMovies','featuredMovies','animationMovies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);

        return view('landing.movie_detail', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
