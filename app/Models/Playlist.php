<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = ['playListName'];

    /**
     * The songs that belong to the category.
    */
    public function roles()
    {

        return $this->belongsToMany(Song::class, 'play_list_songs');
    }
}
