<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
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
//        'movie_id',
//        'user_id',
//        'showtime_id',
//        'seat_id',
//        'price_id',
//        'purchase_date',
//        'status'


        Ticket::create([
            'movie_id' => $request['movie_id'],
            'user_id' => $request['user_id'],
            'showtime_id' => $request['showtime_id'],
            'seat_id' => $request['seat_id'],
            'price' => $request['price'],
            'purchase_date' => $request['purchase_date'],
            'status' => $request['status'],
        ]);

        return back()->with(['success','Ticket created successfully.']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->update([
            'movie_id' => $request['movie_id'],
            'user_id' => $request['user_id'],
            'showtime_id' => $request['showtime_id'],
            'seat_id' => $request['seat_id'],
            'price' => $request['price'],
            'purchase_date' => $request['purchase_date'],
            'status' => $request['status'],
        ]);

        return back()->with(['success','Ticket updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return back()->with(['success','Ticket deleted successfully.']);
    }
}
