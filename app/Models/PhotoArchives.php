<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoArchives extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'filename',
        'origim',
        'description',
        'region',
        'count_likes',
        'count_complains',
        'shadow_ban'
    ];
}
