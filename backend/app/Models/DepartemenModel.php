<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartemenModel extends Model
{
    use HasFactory;

    protected $table = 'departemen_M';

    protected $fillable = [
        'namaDepartemen',
        'deskripsi',
        'jabatan_id',
    ];
}
