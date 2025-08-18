<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $table = 'roles';
    protected $primaryKey = 'rl_id';

    protected $fillable = [
        'rl_name',
        'rl_description',
        'rl_create_by',
        'rl_update_by',
        'rl_delete_by',
        'rl_sys_note',
    ];

    protected $dates = [
        'rl_created_at',
        'rl_updated_at',
        'rl_deleted_at',
    ];
}
