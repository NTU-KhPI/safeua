<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Region;
use App\Models\User;
use App\Models\History;
use App\Filters\QueryFilter;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag',
        'file_location',
    ];

    protected $primaryKey = 'photo_id';

    public function region()
    {
       return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }

    public function history()
    {
        return $this->belongsToMany(History::class, 'history_photo', 'photo_id', 'history_id');
    }
}
