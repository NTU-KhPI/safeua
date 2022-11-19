<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\City;
use App\Models\History;

class Region extends Model
{
    use HasFactory;

    protected $primaryKey = 'region_id';

    public function cities()
    {
       return $this->hasMany(City::class, 'region_id', 'region_id');
    }

    public function histories()
    {
       return $this->hasMany(History::class, 'region_id', 'region_id');
    }
}
