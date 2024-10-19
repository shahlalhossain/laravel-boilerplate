<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
//    protected $fillable = ['article_id', 'user_id', 'comment', 'status'];
//    protected $fillable = ['article_id', 'user_id', 'comment', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'];
    protected $guarded = [];
}
