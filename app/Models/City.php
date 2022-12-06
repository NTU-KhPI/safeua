<?php

namespace App\Models;

use App\Models\User;
use App\Models\Region;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $primaryKey = 'city_id';

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }

    public function city()
    {
        return $this->hasMany(User::class, 'region_id', 'region_id');
    }
}
