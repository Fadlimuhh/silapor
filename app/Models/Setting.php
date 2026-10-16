<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'nama_website',
        'email_admin',
        'nomor_telepon',
        'alamat',
        'deskripsi',
        'logo',
    ];
}