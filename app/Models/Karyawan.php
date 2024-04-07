<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;


class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'departmen',
        'jabatan_id',
        'name',
        'norek',
        'masuk',
        'statuskaryawan'
    ];

    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function totalgaji(): HasMany
    {
        return $this->hasMany(Totalgaji::class);
    }
}
