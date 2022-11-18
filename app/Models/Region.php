<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\City;
use App\Models\History;

class Region extends Model
{
    use HasFactory;

    public function cities()
    {
       return $this->hasMany(City::class, 'id', 'region_id');
    }

    public function histories()
    {
       return $this->hasMany(History::class, 'id', 'region_id');
    }
}