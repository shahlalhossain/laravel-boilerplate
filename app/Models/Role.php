<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\Relationship\RoleRelationship;
use App\Models\Traits\Attribute\RoleAttribute;
use App\Models\Traits\Method\RoleMethod;
use App\Models\Traits\Scope\RoleScope;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory,
        RoleAttribute,
        RoleMethod,
        RoleScope;

    protected $table = 'roles';

    /**
     * @var string[]
     */
    protected $with = ['permissions'];
}
