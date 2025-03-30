<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Define the table if needed (optional, it's inferred by Laravel)
    protected $table = 'news';

    // Define the fillable fields to enable mass assignment
    protected $fillable = ['title', 'description', 'image', 'date', 'program_head']; // Added 'program_head' to fillable

    /**
     * Define the relationship to the Program Head (Member).
     */
    public function programHead()
    {
        return $this->belongsTo(Member::class, 'program_head');
    }
}
