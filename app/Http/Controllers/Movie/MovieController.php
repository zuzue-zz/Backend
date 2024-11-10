<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use App\Models\Showtime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\File;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('admin.movie.index', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.movie.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'title' => 'required',
//            'description' => 'required|max:1000',
//            'duration' => 'required',
//            'rating' => 'required',
//            'release_date' => 'required|date',
////            'featured' => 'required',
////            'category_id' => 'required',
//        ]);

        $movie = Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'rating' => $request->rating,
            'trailer_link' => $request->trailer_link,
            'release_date' => $request->release_date,
            'featured' => $request->featured==1?true:false,
            'category_id' => $request->category_id
        ]);

        if($request->hasFile('image_path')){
            $file = $request->file('image_path');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/moviephotos/'), $filename);

            $movie->image_path = $filename;
            $movie->save();
        }

        return to_route('movies.index')->with('success', 'Movie added successfully');
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
        $movie = Movie::findOrFail($id);
        $categories = Category::all();

        return view('admin.movie.edit',compact('movie', 'categories'));
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

        $movie = Movie::findOrFail($id);

        $movie->update([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'rating' => $request->rating,
            'review' => $request->review,
            'trailer_link' => $request->trailer_link,
            'release_date' => $request->release_date,
            'featured' => $request->featured==1?true:false,
            'category_id' => $request->category_id
        ]);

        if($request->hasFile('image_path')){

            if($movie->image_path){
                $file_path = $movie->image_path;
                if(file_exists($file_path)){
                    File::delete($file_path);
                }

            }

            $file = $request->file('image_path');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/moviephotos/'), $filename);

            $movie->image_path = $filename;
            $movie->save();
        }

        return to_route('movies.index')->with('success', 'Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        if($movie->image_path){
            $file_path = $movie->image_path;
            if(file_exists($file_path)){
                File::delete($file_path);
            }

        }
        $movie->delete();

        return back()->with('success', 'Movie deleted successfully');
    }
}
