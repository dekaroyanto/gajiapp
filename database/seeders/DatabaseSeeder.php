<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jabatan;
use App\Models\Karyawan;
use App\Models\Totalgaji;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(
            [
                "username" => 'admin',
                "password" => Hash::make('admin'),
                'name' => 'Deka',
                'email' => 'dekaroy05@gmail.com'
            ]
        );

        $data = [
            [
                'name' => 'DIMAS MARKIANO',
                'departmen' => 'KEYPERSON',
                'norek' => '2990631151',
                'masuk' => '2009-01-10',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 1,
            ],
            [
                'name' => 'DAUD SULAIMAN',
                'departmen' => 'KEYPERSON',
                'norek' => '3740790730',
                'masuk' => '2010-09-14',
                // 'lamakerja' => '13.49',
                'jabatan_id' => 2,
            ],

            [
                'departmen' => 'CREDIT AR',
                'name' => 'IMAM SAEPUDDIN',
                'norek' => '3040509941',
                'masuk' => '2015-08-13',
                // 'lamakerja' => '13.49',
                'jabatan_id' => 3,
            ],

            [
                'departmen' => 'MARKETING',
                'name' => 'IRWANTO',
                'norek' => '3040831681',
                'masuk' => '2021-10-09',
                // 'lamakerja' => '13.49',
                'jabatan_id' => 11,
            ],
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

        $data3 = [
            [
                'karyawan_id' => "1",
                'hadir' => "26",
                'izin' => "2",
                'sakit' => '1',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '145000',
                'kasbon' => '0',
            ],
            [
                'karyawan_id' => "2",
                'hadir' => "27",
                'izin' => "0",
                'sakit' => '1',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '360000',
                'bpjs' => '115000',
                'kasbon' => '0',
            ],
        ];

        Totalgaji::insert($data3);
    }
}
