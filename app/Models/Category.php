<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'p_category';
    public $timestamps = false;
    protected $primaryKey = 'cat_id';
    protected $guarded = [];
}
