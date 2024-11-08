<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
//$table->id();
//$table->string('title');
//$table->text('description');
//$table->integer('duration');
//$table->decimal('rating', 2, 1)->default(0);
//$table->date('release_date');
//$table->foreignId('category_id')->constrained('categories');
//$table->timestamps();

    use HasFactory;

    protected $table = 'movies';
    protected $fillable = [
        'title',
        'description',
        'duration',
        'rating',
        'review',
        'image_path',
        'trailer_link',
        'release_date',
        'featured',
        'category_id'
    ];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }
}
