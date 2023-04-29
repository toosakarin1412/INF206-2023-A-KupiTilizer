<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestJemput extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'no_hp',
        'alamat',
        'jenis_sampah',
        'total_sampah',
        'tanggal_jemput',
        'waktu_jemput',
    ];
}
