<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seats';
    protected $fillable = [
        'seat_number',
        'type'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
