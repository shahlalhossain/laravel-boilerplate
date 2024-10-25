<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Scope\UserScope;
use App\Models\Traits\Method\UserMethod;
use App\Models\Traits\Attribute\UserAttribute;
use App\Models\Traits\Relationship\UserRelationship;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User.
 */
class User extends Authenticatable
{
    use HasFactory,
        HasApiTokens,
        HasRoles,
        HasPermissions,
        SoftDeletes,
        UserRelationship,
        UserAttribute,
        UserMethod,
        UserScope;

    public const TYPE_ADMIN = 'admin';
    public const TYPE_AUTHOR = 'author';
    public const TYPE_USER = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // TODO:
        'name',
        'mobile',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token',];

    /**
     * @var array
     */
    protected array $dates = ['last_login_at', 'email_verified_at', 'mobile_verified_at'];

    /**
     * @var array
     */
    protected $appends = ['avatar',];

    /**
     * @var string[]
     */
    protected $with = ['permissions', 'roles',];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts() : array
    {
        return [
            'active'                => 'boolean',
            'password'              => 'hashed',
            'email_verified_at'     => 'datetime',
            'mobile_verified_at'    => 'datetime',
        ];
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory() : Factory
    {
        return UserFactory::new();
    }
}
