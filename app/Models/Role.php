<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'rl_id';
    public $timestamps = false;

    protected $fillable = [
        'rl_name',
        'rl_description',
    ];
}
