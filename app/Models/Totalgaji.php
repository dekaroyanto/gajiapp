<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Totalgaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'karyawan_id',
        'tanggal',
        'hadir',
        'izin',
        'sakit',
        'telat',
        'alfa',
        'angsuran',
        'bpjs',
        'kasbon',
    ];

    // public function calculateTotalGaji()
    // {
    //     return $this->gajipokok + $this->gjabatan + $this->oprs + $this->service + $this->hp + ($this->inshadir * $this->hadir) - ($this->angsuran + $this->bpjs + $this->kasbon);
    // }

    public function karyawan(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class);
    }
}
