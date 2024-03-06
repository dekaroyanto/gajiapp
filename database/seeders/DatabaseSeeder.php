<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Karyawan Satu', 'norek' => '123', 'lamakerja' => '1.2'],
            ['name' => 'Karyawan Dua', 'norek' => '321', 'lamakerja' => '2.1'],
            // tambahkan data lainnya
        ];

        Karyawan::insert($data);

        $data2 = [
            [
                'jabatan' => 'KOU CLD',
                'gajipokok' => '1800000',
                'gjabatan' => '800000',
                'oprs' => '500000',
                'service' => '150000',
                'hp' => '200000',
                'inshadir' => '20000',


            ],

            [
                'jabatan' => 'KORWIL CLD',
                'gajipokok' => '1500000',
                'gjabatan' => '500000',
                'oprs' => '500000',
                'service' => '100000',
                'hp' => '50000',
                'inshadir' => '20000',


            ],

            [
                'jabatan' => 'KOORD AR',
                'gajipokok' => '1200000',
                'gjabatan' => '350000',
                'oprs' => '350000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'ADM AR',
                'gajipokok' => '1000000',
                'gjabatan' => '300000',
                'oprs' => '300000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'KOORD ANALIS',
                'gajipokok' => '1500000',
                'gjabatan' => '500000',
                'oprs' => '500000',
                'service' => '100000',
                'hp' => '50000',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'ANALIS',
                'gajipokok' => '1200000',
                'gjabatan' => '400000',
                'oprs' => '400000',
                'service' => '100000',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'COLLECTOR',
                'gajipokok' => '1000000',
                'gjabatan' => '250000',
                'oprs' => '250000',
                'service' => '100000',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'MT COLLECTOR',
                'gajipokok' => '1000000',
                'gjabatan' => '250000',
                'oprs' => '250000',
                'service' => '100000',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'ADM UMUM',
                'gajipokok' => '1000000',
                'gjabatan' => '300000',
                'oprs' => '300000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'TEKNISI',
                'gajipokok' => '900000',
                'gjabatan' => '250000',
                'oprs' => '250000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'SPV GR RDR (TR)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',


            ],
            [
                'jabatan' => 'SPV GR MDR (TR)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',


            ],
            [
                'jabatan' => 'SPV OT CPJ (TR)',
                'gajipokok' => '100000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'SPV SR  LSR (TR)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',


            ],
            [
                'jabatan' => 'SPV OT KRS (YN)',
                'gajipokok' => '1200000',
                'gjabatan' => '600000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '19000',


            ],
            [
                'jabatan' => 'ASS KERSANA 2',
                'gajipokok' => '800000',
                'gjabatan' => '400000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '12000',


            ],
            [
                'jabatan' => 'PRAM (TR) CLD',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',


            ],
            [
                'jabatan' => 'PRAM (TR) CPJ',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',


            ],
            [
                'jabatan' => 'PRAM (TR) LSR',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',


            ],
            [
                'jabatan' => 'PRAM (TR) KRS',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',


            ],
            [
                'jabatan' => 'OB CLD',
                'gajipokok' => '800000',
                'gjabatan' => '250000',
                'oprs' => '250000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',
            ],
            [
                'jabatan' => 'SPV GR ITN (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],
            [
                'jabatan' => 'SPV SR  CLD (TR)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],
            [
                'jabatan' => 'SPV GR SNP (TR)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],

        ];

        Jabatan::insert($data2);
    }
}
