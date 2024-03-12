<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Totalgaji extends Model
{
    use HasFactory;

    public function getTotalInshadirAttribute()
    {
        return $this->karyawan->jabatan->inshadir * $this->hadir + $this->thr;
    }

    public function getTotalgajiAttribute()
    {
        return $this->total_inshadir + $this->karyawan->jabatan->gajipokok + $this->karyawan->jabatan->gjabatan + $this->karyawan->jabatan->oprs + $this->karyawan->jabatan->service + $this->karyawan->jabatan->hp;
    }

    public function getGajiakhirAttribute()
    {
        return $this->totalgaji - ($this->angsuran + $this->bpjs + $this->kasbon);
    }

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
        'thr'
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
