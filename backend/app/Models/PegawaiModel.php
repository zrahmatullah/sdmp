<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{

    protected $table = 'pegawai_M';
    //

    protected $fillable = [
        'namaPegawai',
        'email',
        'noTelepon',
        'alamat',
        'tglLahir',
        'tglGabung',
        'jabatan_id',
        'departemen_id',
        'foto',
    ];
}
