<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;

    protected $table = 'extracurriculers'; // sesuaikan dengan nama tabel migration kamu

    protected $primaryKey = 'ext_id';

    public $timestamps = false; // karena kamu custom timestamp

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

    public function forms()
    {
        return $this->hasMany(Form::class, 'frm_extracuriculler_id', 'ext_id');
    }
}
