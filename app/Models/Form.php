<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use SoftDeletes;

    protected $table = 'forms';

    protected $primaryKey = 'frm_id';

    protected $fillable = [
        'frm_content',
        'frm_extracuriculler_id',
        'frm_user_id',
        'frm_status',
        'frm_reason',
        'frm_created_by',
        'frm_updated_by',
        'frm_deleted_by',
        'frm_sys_note',
    ];
}
