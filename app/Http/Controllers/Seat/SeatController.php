<?php

namespace App\Http\Controllers\Seat;

use App\Http\Controllers\Controller;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'seat_number' => 'required',
            'type' => 'required',
        ]);

        Seat::create($request->all());

        return back()->with('success', 'Seat created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'seat_number' => 'required',
            'type' => 'required',
        ]);

        Seat::create($request->all());

        return back()->with('success', 'Seat created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
