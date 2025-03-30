<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_name',
        'club_coordinator',
        'club_picture',
    ];

    // Define the relationship with Member (Club Coordinator)
    public function coordinator()
    {
        return $this->belongsTo(Member::class, 'club_coordinator');
    }
}
