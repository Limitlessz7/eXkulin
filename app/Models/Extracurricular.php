<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Extracurricular extends Model
{
    protected $table = 'extracuricullers'; // use your current table name
    protected $primaryKey = 'ext_id';
    public $timestamps = false; // since you're using custom timestamp fields

    protected $fillable = [
        'ext_name',
        'ext_status',
        'ext_description',
        'ext_created_by',
        'ext_updated_by',
        'ext_deleted_by',
        'ext_created_at',
        'ext_updated_at',
        'ext_deleted_at',
        'ext_sys_note',
    ];

    public function forms(): HasMany
    {
        return $this->hasMany(Form::class, 'frm_extracuriculler_id', 'ext_id');
    }
}
