<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'p_users';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $guarded = [];
}
