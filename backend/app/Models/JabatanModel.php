<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Jabatan",  
 *     type="object",      
 *     required={"namaJabatan", "deskripsiJabatan", "statusEnable"}, 
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         example=1  
 *     ),
 *     @OA\Property(
 *         property="namaJabatan",
 *         type="string",
 *         example="Manager"  
 *     ),
 *     @OA\Property(
 *         property="deskripsiJabatan",
 *         type="string",
 *         example="Manages a team of developers" 
 *     ),
 *     @OA\Property(
 *         property="golonganGaji",
 *         type="string",
 *         example="A"  
 *     ),
 *     @OA\Property(
 *         property="statusEnable",
 *         type="boolean",
 *         example=true  
 *     )
 * )
 */

class JabatanModel extends Model
{
    use HasFactory;

    protected $table = 'jabatan_M';

    protected $fillable = [
        'namaJabatan',
        'deskripsiJabatan',
        'golonganGaji',
        'statusEnable',
    ];
}
