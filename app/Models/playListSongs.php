<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playListSongs extends Model
{
    use HasFactory;

    protected $fillable = ['song_id','category_id'];

}
