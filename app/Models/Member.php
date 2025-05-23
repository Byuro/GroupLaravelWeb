<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'department', 'image'];

    public static function boot()
    {
        parent::boot();

        // Automatically handle image deletion when member is deleted
        static::deleting(function ($member) {
            if ($member->image && file_exists(public_path('images/' . $member->image))) {
                unlink(public_path('images/' . $member->image));
            }
        });
    }

    /**
     * Define the relationship to the News items where this member is the program head.
     */
    public function newsItems()
    {
        return $this->hasMany(News::class, 'program_head'); // Defines the reverse relationship to News
    }
}
