<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Region;

class City extends Model
{
    use HasFactory;

    protected $primaryKey = 'city_id';

    public function region()
    {
       return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }
}
