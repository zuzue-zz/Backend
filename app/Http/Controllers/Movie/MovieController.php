<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use App\Models\Showtime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get movies that show today
        $showNowMovies = Showtime::with('movie')
                        ->where('show_date', Date::now()->format('Y-m-d'))
                        ->get();

        // get popular movies by rating
        $popularMovies = Movie::orderBy('rating', 'desc')->paginate(8);

        // get featured movies
        $featuredMovies = Movie::where('featured', true)->paginate(8);

        // Return the data to the view
        return view('layouts.app', compact('showNowMovies', 'popularMovies', 'featuredMovies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('movies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:1000',
            'duration' => 'required',
            'rating' => 'required',
            'release_date' => 'required|date',
            'featured' => 'required',
            'category_id' => 'required',
        ]);

        Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'rating' => $request->rating,
            'review' => $request->review,
            'image_path' => $request->image_path,
            'trailer_link' => $request->trailer_link,
            'release_date' => $request->release_date,
            'featured' => $request->featured,
            'category_id' => $request->category_id
        ]);

        return back()->with('success', 'Movie added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = findOrFail($id);
        $categories = Category::all();

        return view('movies.edit',compact('movie', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'sometimes',
            'description' => 'sometimes|max:1000',
            'duration' => 'sometimes',
            'rating' => 'sometimes',
            'release_date' => 'sometimes|date',
            'featured' => 'sometimes',
            'category_id' => 'sometimes',
        ]);

        $movie = findOrFail($id);

        $movie->update([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'rating' => $request->rating,
            'review' => $request->review,
            'image_path' => $request->image_path,
            'trailer_link' => $request->trailer_link,
            'release_date' => $request->release_date,
            'featured' => $request->featured,
            'category_id' => $request->category_id
        ]);

        return back()->with('success', 'Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return back()->with('success', 'Movie deleted successfully');
    }
}
