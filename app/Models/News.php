<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Define the table if needed, otherwise it will assume a table named 'news'
    protected $table = 'news';

    // Optionally define the fillable fields if you're using mass assignment
    protected $fillable = ['title', 'description', 'image', 'date'];
}
