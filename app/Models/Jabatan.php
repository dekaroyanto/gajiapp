<?php

namespace App\Models;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Jabatan extends Model
{
    public function karyawans(): HasMany
    {
        return $this->hasMany(Karyawan::class);
    }

    use HasFactory;

    protected $fillable = [
        'jabatan',
        'gajipokok',
        'gjabatan',
        'oprs',
        'service',
        'hp',
        'inshadir'
    ];
}
