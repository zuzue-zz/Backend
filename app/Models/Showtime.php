<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $table = 'showtimes';
    protected $fillable = [
        'movie_id',
        'show_date',
        'show_time'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
