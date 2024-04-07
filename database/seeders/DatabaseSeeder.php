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

        $karyawan = [
            [
                'name' => 'SUMIATI',
                'departmen' => 'KEYPERSON',
                'norek' => '2990327591',
                'masuk' => '2005-10-10',
                'jabatan_id' => 1,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'FRIDA HASANAH',
                'departmen' => 'KEYPERSON',
                'norek' => '1341958763',
                'masuk' => '2006-12-09',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 2,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'ARI ARYANTO',
                'departmen' => 'KEYPERSON',
                'norek' => '3040507166',
                'masuk' => '2013-06-02',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 3,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'SAMSUDIN',
                'departmen' => 'KEYPERSON',
                'norek' => '7745356753',
                'masuk' => '2013-10-25',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 4,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'ADE RIAWAN',
                'departmen' => 'ACCOUNTING',
                'norek' => '1341958755',
                'masuk' => '2014-08-18',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 5,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'ALI MURTADO BILQIYAS  F ZEN',
                'departmen' => 'ACCOUNTING',
                'norek' => '1342013371',
                'masuk' => '2018-03-26',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 6,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'ANISA AGUSTIN',
                'departmen' => 'ACCOUNTING',
                'norek' => '3741476574',
                'masuk' => '2023-06-23',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 7,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'NIKEN SULISTIA',
                'departmen' => 'ACCOUNTING',
                'norek' => '5355006066',
                'masuk' => '2022-08-12',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 7,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'IVANA ARNELITA',
                'departmen' => 'HRD & GUDANG',
                'norek' => '8180280970',
                'masuk' => '2020-11-12',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 8,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => "AI'P ILHAM UTOMO",
                'departmen' => 'HRD & GUDANG',
                'norek' => '1342880252',
                'masuk' => '2023-05-19',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 9,
                'statuskaryawan' => 'Aktif'
            ],

            [
                'name' => 'HARYONO',
                'departmen' => 'HRD & GUDANG',
                'norek' => '1342825839',
                'masuk' => '2023-01-23',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 10,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'AMINUDIN',
                'departmen' => 'HRD & GUDANG',
                'norek' => '1341960351',
                'masuk' => '2019-12-22',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 11,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'RIYANTO',
                'departmen' => 'HRD & GUDANG',
                'norek' => '3740827706',
                'masuk' => '2018-06-20',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 11,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'FERI ATALENA SURYONO',
                'departmen' => 'HRD & GUDANG',
                'norek' => '1342576294',
                'masuk' => '2021-08-23',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 12,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'MOH AMIN MUBAROK',
                'departmen' => 'HRD & GUDANG',
                'norek' => '3040736661',
                'masuk' => '2023-02-07',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 12,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'AGUNG',
                'departmen' => 'HRD & GUDANG',
                'norek' => '5355002281',
                'masuk' => '2020-07-13',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 13,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'ARYA R KASURA',
                'departmen' => 'CREDIT AR',
                'norek' => '1341958593',
                'masuk' => '2010-05-03',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 14,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'APRI RIYANTO',
                'departmen' => 'CREDIT AR',
                'norek' => '3741164271',
                'masuk' => '2020-06-20',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 15,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'RUDI. H ARYANTO',
                'departmen' => 'CREDIT AR',
                'norek' => '1341957724',
                'masuk' => '2013-12-19',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 16,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'NURKAYA',
                'departmen' => 'CREDIT AR',
                'norek' => '1341957732',
                'masuk' => '2013-12-30',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 16,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'REKHA YULIANA',
                'departmen' => 'CREDIT AR',
                'norek' => '1341958691',
                'masuk' => '2013-09-05',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 17,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'MIMIN KARMILA',
                'departmen' => 'CREDIT AR',
                'norek' => '1341956795',
                'masuk' => '2011-04-10',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 18,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'MUTMAINAH',
                'departmen' => 'CREDIT AR',
                'norek' => '8180263501',
                'masuk' => '2019-08-10',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 19,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'NUGARI',
                'departmen' => 'CREDIT AR',
                'norek' => '5355007780',
                'masuk' => '2022-11-03',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 19,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'IRWAN NIRWANTO',
                'departmen' => 'CREDIT AR',
                'norek' => '1342114347',
                'masuk' => '2023-11-07',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 20,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'ADE SRI MULYA',
                'departmen' => 'CREDIT AR',
                'norek' => '1342200341',
                'masuk' => '2023-11-06',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 20,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'SITI NUR AFIANI',
                'departmen' => 'MARKETING',
                'norek' => '3741217510',
                'masuk' => '2018-02-23',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 21,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'ETUN PRIYATUN',
                'departmen' => 'MARKETING',
                'norek' => '7745357091',
                'masuk' => '2011-10-11',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 22,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'YENI TRIYANA',
                'departmen' => 'MARKETING',
                'norek' => '7745584101',
                'masuk' => '2020-08-03',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 23,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'LUCKY GILANG RAMADHAN',
                'departmen' => 'MARKETING',
                'norek' => '3040563309',
                'masuk' => '2023-02-20',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 24,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'DEWI NOVITA INDIKA SARI',
                'departmen' => 'MARKETING',
                'norek' => '7746039084',
                'masuk' => '2023-07-07',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 25,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'SUWATI',
                'departmen' => 'MARKETING',
                'norek' => '1342111828',
                'masuk' => '2013-10-23',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 26,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'DEBY VIKI DWI PRASETYO',
                'departmen' => 'MARKETING',
                'norek' => '5355005485',
                'masuk' => '2023-11-20',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 27,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'YURI GAGARIN',
                'departmen' => 'MARKETING',
                'norek' => '1342893800',
                'masuk' => '2023-05-23',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 28,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'ANGGA RIZMAN WIJAYA',
                'departmen' => 'MARKETING',
                'norek' => '2990859763',
                'masuk' => '2023-08-01',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 29,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'JUNENDI',
                'departmen' => 'MARKETING',
                'norek' => '5355009201',
                'masuk' => '2023-08-01',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 30,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => 'WANISA',
                'departmen' => 'MARKETING',
                'norek' => '5355001994',
                'masuk' => '2021-11-01',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 31,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "A'SYIFAH KHUSNUL QOTIMAH",
                'departmen' => 'MARKETING',
                'norek' => '5355005990',
                'masuk' => '2022-11-29',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 31,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ALVIN PRASETIYO",
                'departmen' => 'MARKETING',
                'norek' => '5355006805',
                'masuk' => '2022-11-19',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 31,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "AGUS CAHYONO",
                'departmen' => 'MARKETING',
                'norek' => '1342959797',
                'masuk' => '2023-09-12',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 32,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "PUTRI MEISI",
                'departmen' => 'MARKETING',
                'norek' => '7745593721',
                'masuk' => '2020-03-30',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 33,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "SESPIANAH",
                'departmen' => 'MARKETING',
                'norek' => '7745356834',
                'masuk' => '2017-12-01',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 33,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "KOMARUDIN",
                'departmen' => 'MARKETING',
                'norek' => '1342868066',
                'masuk' => '2023-01-21',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 33,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "LUWIYA",
                'departmen' => 'MARKETING',
                'norek' => '5355006031',
                'masuk' => '2022-09-27',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 33,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ADI ERMADA",
                'departmen' => 'MARKETING',
                'norek' => '3020763166',
                'masuk' => '2020-01-18',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 34,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ANDINI",
                'departmen' => 'MARKETING',
                'norek' => '7745924379',
                'masuk' => '2022-09-12',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 35,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "SITI ALIMAH MAOLA",
                'departmen' => 'MARKETING',
                'norek' => '1342213809',
                'masuk' => '2019-08-30',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 36,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ULFAH FIDIYAH",
                'departmen' => 'MARKETING',
                'norek' => '7745903584',
                'masuk' => '2022-07-12',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 37,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "M. NAJMI MUHARAM",
                'departmen' => 'MARKETING',
                'norek' => '3741509596',
                'masuk' => '2023-08-28',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 37,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "TRIYANA PUTRI",
                'departmen' => 'MARKETING',
                'norek' => '7745619045',
                'masuk' => '2021-02-10',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 38,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "SITI SUSANTI",
                'departmen' => 'MARKETING',
                'norek' => '1342931949',
                'masuk' => '2023-07-12',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 39,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "SITI QOMARIYAH",
                'departmen' => 'MARKETING',
                'norek' => '1342931931',
                'masuk' => '2023-07-12',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 39,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "HERLINA",
                'departmen' => 'MARKETING',
                'norek' => '1342931957',
                'masuk' => '2023-07-12',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 39,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "TENGKUH MOHAMAD RAJIT",
                'departmen' => 'MARKETING',
                'norek' => '7746107667',
                'masuk' => '2023-11-08',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 40,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "HAWA HUMAEROH",
                'departmen' => 'MARKETING',
                'norek' => '5355011957',
                'masuk' => '2024-01-11',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 40,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "REZZA FERIAN PERMANA",
                'departmen' => 'MARKETING',
                'norek' => '4181051684',
                'masuk' => '2023-09-14',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 40,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "MUHAMMAD NOEFFAL",
                'departmen' => 'MARKETING',
                'norek' => '5355002125',
                'masuk' => '2021-11-01',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 41,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "SUGIANTO",
                'departmen' => 'MARKETING',
                'norek' => '7745563503',
                'masuk' => '2020-07-06',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 42,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "APRILIA YOLANDA",
                'departmen' => 'MARKETING',
                'norek' => '7745960278',
                'masuk' => '2023-01-19',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 43,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ERICA DAMAYANTI",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2024-01-26',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 44,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ERNASARI",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2024-01-26',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 44,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "IQBAL MAULANA",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2023-11-06',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 45,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "SUGIRI",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2024-01-24',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 45,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ARDIYANSAH",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2023-11-24',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 46,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "TRI TUNENGSIH",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2023-12-07',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 47,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "MUSA",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2023-11-08',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 48,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ADE AGUNG",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2023-11-08',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 48,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "REZZA TRIYANDANI",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2024-01-31',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 49,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "ABDUL MUGHIS SETIAWAN",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2024-01-10',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 50,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "IKE NURJANAH",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2023-08-28',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 51,
                'statuskaryawan' => 'Aktif',
            ],

            [
                'name' => "NELLY DWI VUJIWATI",
                'departmen' => 'MT',
                'norek' => '0',
                'masuk' => '2024-01-09',
                // 'lamakerja' => '15.16',
                'jabatan_id' => 52,
                'statuskaryawan' => 'Aktif',
            ],
        ];

        Karyawan::insert($karyawan);



        $jabatan = [
            [
                'jabatan' => 'HAF CRB',
                'gajipokok' => '3500000',
                'gjabatan' => '2000000',
                'oprs' => '1200000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '20000',


            ],

            [
                'jabatan' => 'HEAD HRD',
                'gajipokok' => '1900000',
                'gjabatan' => '1000000',
                'oprs' => '500000',
                'service' => '0',
                'hp' => '200000',
                'inshadir' => '20000',


            ],

            [
                'jabatan' => 'HEAD CREDIT',
                'gajipokok' => '1700000',
                'gjabatan' => '800000',
                'oprs' => '500000',
                'service' => '200000',
                'hp' => '100000',
                'inshadir' => '20000',


            ],
            [
                'jabatan' => 'KOORD MKT',
                'gajipokok' => '1500000',
                'gjabatan' => '700000',
                'oprs' => '500000',
                'service' => '0',
                'hp' => '200000',
                'inshadir' => '20000',


            ],
            [
                'jabatan' => 'KASIR',
                'gajipokok' => '1200000',
                'gjabatan' => '400000',
                'oprs' => '40000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'STOCK CONTROL',
                'gajipokok' => '1000000',
                'gjabatan' => '350000',
                'oprs' => '350000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'MT ACCOUNTING',
                'gajipokok' => '1000000',
                'gjabatan' => '300000',
                'oprs' => '300000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'MT ADM UMUM',
                'gajipokok' => '1000000',
                'gjabatan' => '300000',
                'oprs' => '300000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'OB OFFICE',
                'gajipokok' => '900000',
                'gjabatan' => '250000',
                'oprs' => '300000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'KOORD GUDANG',
                'gajipokok' => '1100000',
                'gjabatan' => '500000',
                'oprs' => '400000',
                'service' => '0',
                'hp' => '100000',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'DRIVER PENGIRIMAN',
                'gajipokok' => '1000000',
                'gjabatan' => '300000',
                'oprs' => '300000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'HELPER',
                'gajipokok' => '900000',
                'gjabatan' => '250000',
                'oprs' => '250000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'TEKNISI',
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
                'gjabatan' => '600000',
                'oprs' => '600000',
                'service' => '100000',
                'hp' => '100000',
                'inshadir' => '20000',


            ],
            [
                'jabatan' => 'KORWIL',
                'gajipokok' => '1300000',
                'gjabatan' => '400000',
                'oprs' => '350000',
                'service' => '100000',
                'hp' => '100000',
                'inshadir' => '20000',


            ],
            [
                'jabatan' => 'ANALIS',
                'gajipokok' => '1400000',
                'gjabatan' => '400000',
                'oprs' => '400000',
                'service' => '100000',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'KOORD A/R',
                'gajipokok' => '1300000',
                'gjabatan' => '350000',
                'oprs' => '350000',
                'service' => '0',
                'hp' => '100000',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'STAFF A/R',
                'gajipokok' => '1100000',
                'gjabatan' => '300000',
                'oprs' => '350000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'COLLECTOR',
                'gajipokok' => '1000000',
                'gjabatan' => '300000',
                'oprs' => '300000',
                'service' => '100000',
                'hp' => '0',
                'inshadir' => '15000',


            ],
            [
                'jabatan' => 'SPV SR KGT (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',


            ],
            [
                'jabatan' => 'SPV OT AWN (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],
            [
                'jabatan' => 'SPV SR SBR (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],
            [
                'jabatan' => 'SPV OT PLM (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],
            [
                'jabatan' => 'SPV OT KRM (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],

            [
                'jabatan' => 'SPV OT PRM (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],

            [
                'jabatan' => 'SPV OT PLD (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],

            [
                'jabatan' => 'SPV GR MTH (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],

            [
                'jabatan' => 'SPV GR CKR (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],

            [
                'jabatan' => 'SPV GR ELG (YN)',
                'gajipokok' => '950000',
                'gjabatan' => '500000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '14000',
            ],

            [
                'jabatan' => 'PRAM (YR) KRG',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) KGT',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YN) AWN',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) AWN',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YN) GGS',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) GGS',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YN) SBR',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) SBR',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YN) PLM',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) PLM',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) KRM',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) PRM',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YN) PLD',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) PLD',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'MT A/R (MP BARU)',
                'gajipokok' => '1000000',
                'gjabatan' => '300000',
                'oprs' => '300000',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '15000',
            ],

            [
                'jabatan' => 'COLLECTOR (MP BARU)',
                'gajipokok' => '1000000',
                'gjabatan' => '250000',
                'oprs' => '250000',
                'service' => '100000',
                'hp' => '0',
                'inshadir' => '15000',
            ],

            [
                'jabatan' => 'MT COLLECTOR (MP BARU)',
                'gajipokok' => '1000000',
                'gjabatan' => '250000',
                'oprs' => '250000',
                'service' => '100000',
                'hp' => '0',
                'inshadir' => '15000',
            ],

            [
                'jabatan' => 'PRAM (YR) KGT (MP BARU)',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) GGS (MP BARU)',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) SBR (MP BARU)',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) KRM (MP BARU)',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) PRM (MP BARU)',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

            [
                'jabatan' => 'PRAM (YR) PLD (MP BARU)',
                'gajipokok' => '600000',
                'gjabatan' => '250000',
                'oprs' => '0',
                'service' => '0',
                'hp' => '0',
                'inshadir' => '11000',
            ],

        ];

        Jabatan::insert($jabatan);

        $gaji = [
            [
                'karyawan_id' => '1',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '145000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '2',
                'tanggal' => '2024-02-25',
                'hadir' => '25',
                'izin' => '3',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '195000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '3',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '245000',
                'bpjs' => '115000',
                'kasbon' => '400000',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '4',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '115000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '5',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '115000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '6',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '140000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '7',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '75000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '8',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '75000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '9',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '360000',
                'bpjs' => '140000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '10',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '75000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '11',
                'tanggal' => '2024-02-25',
                'hadir' => '26',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '2',
                'angsuran' => '0',
                'bpjs' => '115000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '12',
                'tanggal' => '2024-02-25',
                'hadir' => '15',
                'izin' => '0',
                'sakit' => '13',
                'telat' => '0',
                'alfa' => '2',
                'angsuran' => '0',
                'bpjs' => '115000',
                'kasbon' => '500000',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '13',
                'tanggal' => '2024-02-25',
                'hadir' => '28',
                'izin' => '0',
                'sakit' => '0',
                'telat' => '0',
                'alfa' => '0',
                'angsuran' => '0',
                'bpjs' => '115000',
                'kasbon' => '0',
                'thr' => '0'
            ],

            [
                'karyawan_id' => '14',
                'tanggal' => '2024-02-25',
                'hadir' => '27',
                'izin' => '0',
                'sakit' => '13',
                'telat' => '0',
                'alfa' => '1',
                'angsuran' => '0',
                'bpjs' => '115000',
                'kasbon' => '0',
                'thr' => '0'
            ],

        ];
        Totalgaji::insert($gaji);
    }
}
