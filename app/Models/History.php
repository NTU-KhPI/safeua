<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Region;
use App\Models\User;
use App\Filters\QueryFilter;

class History extends Model
{
    use HasFactory;

    public function region()
    {
       return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // public function scopeFilter(Builder $builder, QueryFilter $filter){
    //     return $filter->apply($builder);
    // }
}