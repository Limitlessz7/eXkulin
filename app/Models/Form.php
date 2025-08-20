<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Form extends Model
{
    use SoftDeletes;

    protected $table = 'forms';
    protected $primaryKey = 'frm_id';
    public $timestamps = false; // since you're using custom timestamp columns

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

    /**
     * Relationship to Extracurricular (extracuriculler).
     */
    public function extracurricular(): BelongsTo
    {
        return $this->belongsTo(Extracurricular::class, 'frm_extracuriculler_id', 'ext_id');
    }

    /**
     * Relationship to User (creator).
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'frm_created_by', 'usr_id');
    }

    /**
     * Relationship to User (updater).
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'frm_updated_by', 'usr_id');
    }

    /**
     * Relationship to User (deleter).
     */
    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'frm_deleted_by', 'usr_id');
    }
}
