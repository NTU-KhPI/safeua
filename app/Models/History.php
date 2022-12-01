<?php

namespace App\Models;

use App\Models\Region;
use App\Models\User;
use App\Filters\QueryFilter;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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

    public function number_format_short($n, $precision = 1)
    {
        if ($n < 900) {
            // 0 - 900
            $n_format = number_format($n, $precision);
            $suffix = '';
        } else if ($n < 900000) {
            // 0.9k-850k
            $n_format = number_format($n / 1000, $precision);
            $suffix = 'K';
        } else if ($n < 900000000) {
            // 0.9m-850m
            $n_format = number_format($n / 1000000, $precision);
            $suffix = 'M';
        } else if ($n < 900000000000) {
            // 0.9b-850b
            $n_format = number_format($n / 1000000000, $precision);
            $suffix = 'B';
        } else {
            // 0.9t+
            $n_format = number_format($n / 1000000000000, $precision);
            $suffix = 'T';
        }

        // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
        // Intentionally does not affect partials, eg "1.50" -> "1.50"
        if ($precision > 0) {
            $dotzero = '.' . str_repeat('0', $precision);
            $n_format = str_replace($dotzero, '', $n_format);
        }

        return $n_format . $suffix;
    }
}
