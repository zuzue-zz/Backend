<?php

namespace App\Http\Controllers\Showtime;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Showtime;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showtimes = Showtime::all();


        return view('admin.showtime.index', compact('showtimes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();

        return view('admin.showtime.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required',
            'show_date' => 'required',
            'show_time' => 'required'
        ]);

        Showtime::create([
            'movie_id' => $request->movie_id,
            'show_date' => $request->show_date,
            'show_time' => $request->show_time
        ]);

        return to_route('showtimes.index')->with(['success','Showtime created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showtime = Showtime::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $showtime = Showtime::findOrFail($id);
        $movies = Movie::all();

        return view('admin.showtime.edit',compact('showtime','movies'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'movie_id' => 'sometimes',
            'show_date' => 'sometimes',
            'show_time' => 'sometimes'
        ]);

        $showtime = Showtime::findOrFail($id);

        $showtime->update([
            'movie_id' => $request->movie_id,
            'show_date' => $request->show_date,
            'show_time' => $request->show_time
        ]);

        return to_route('showtimes.index')->with(['success','Showtime updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $showtime = Showtime::findOrFail($id);
        $showtime->delete();

        return redirect()->back()->with(['success','Showtime deleted successfully']);
    }
}
