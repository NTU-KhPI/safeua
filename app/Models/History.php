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

    protected $primaryKey = 'history_id';

    public function region()
    {
       return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    // public function scopeFilter(Builder $builder, QueryFilter $filter){
    //     return $filter->apply($builder);
    // }
}
