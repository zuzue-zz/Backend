<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

//$table->id();
//$table->foreignId('ticket_id')->constrained('tickets');
//$table->decimal('amount', 10, 2)->default(0);
//$table->timestamps('payment_date');
//$table->enum('payment_method', ['cash', 'kbz' , 'wave'])->default('cash');
//$table->enum('payment_status', ['pending', 'paid'])->default('pending');
//$table->timestamps();
    protected $fillable = [
        'ticket_id',
        'amount',
        'payment_date',
        'payment_method',
        'payment_status'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
