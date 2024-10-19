<?php

namespace App\Models\Traits\Scope;

trait RoleScope
{
    /**
     * @param $query
     * @param $term
     * @return mixed
     */
    public function scopeSearch($query, $term)
    {
        return $query->where(function ($query) use ($term) {
            $query->where('name', 'like', '%'.$term.'%')->orWhere('description', 'like', '%'.$term.'%');
        });
    }
}
