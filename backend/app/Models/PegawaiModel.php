<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{

    protected $table = 'pegawai_M';
    //

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'date_of_birth',
        'join_date',
        'jabatan_id',
        'departemen_id',
        'photos',
    ];
}
