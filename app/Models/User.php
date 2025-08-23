<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Nama tabel
    protected $table = 'users';

    // Primary key
    protected $primaryKey = 'usr_id';

    // Field yang bisa diisi
    protected $fillable = [
        'usr_name',
        'usr_email',
        'usr_password',
        'usr_telephone'
    ];

    // Laravel default: pakai kolom 'password'
    // Kita override supaya pakai usr_password
    public function getAuthPassword()
    {
        return $this->usr_password;
    }

    // Kalau pakai timestamps custom
    const CREATED_AT = 'usr_created_at';
    const UPDATED_AT = 'usr_updated_at';
}
