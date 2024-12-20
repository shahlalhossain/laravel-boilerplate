<?php

namespace App\Models\Traits\Scope;

/**
 * Class PermissionScope.
 */
trait PermissionScope
{
    /**
     * @param $query
     * @return mixed
     */
    public function scopeIsMaster($query)
    {
        return $query->whereDoesntHave('parent')
            ->whereHas('children');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeIsParent($query)
    {
        return $query->whereHas('children');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeIsChild($query)
    {
        return $query->whereHas('parent');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeSingular($query)
    {
        return $query->whereNull('parent_id')
            ->whereDoesntHave('children');
    }

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
