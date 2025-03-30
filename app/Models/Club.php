<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_name',
        'club_manager',
        'club_picture', // If you are storing images, handle them properly in your controller
    ];
}
