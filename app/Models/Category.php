<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The songs that belong to the category.
     */
    public function roles()
    {
        return $this->belongsToMany(Song::class, '_song_category');
    }
}
