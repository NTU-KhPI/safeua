<?php

namespace App\Filters;

class PostFilter extends QueryFilter{
    public function region_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('region_id', $id);
        });
    }

    public function search_field($search_string = ''){
        return $this->builder
            ->where('title', 'LIKE', '%'.$search_string.'%')
            ->orWhere('description', 'LIKE', '%'.$search_string.'%');
    }
}
