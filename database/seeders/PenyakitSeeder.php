<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penyakit = [
            [
                'kode_penyakit' => 'ppbk',
                'nama_penyakit' => 'Penyakit Penggerek buah kakao',
            ],
            [
                'kode_penyakit' => 'phpp',
                'nama_penyakit' => 'Penyakit Helopeltis spp'
            ],
            [
                'kode_penyakit' => 'pja',
                'nama_penyakit' => 'Penyakit jamur air'
            ],
            [
                'kode_penyakit' => 'pcssv',
                'nama_penyakit' => 'Coco swollen shoot virus'
            ],
            [
                'kode_penyakit' => 'pwbd',
                'nama_penyakit' => 'Witches Broom Diseases'
            ],
            [
                'kode_penyakit' => 'pmpr',
                'nama_penyakit' => 'Monilia Pod Rod'
            ],
            [
                'kode_penyakit' => 'PC',
                'nama_penyakit' => 'Colletotrichum'
            ],
        ];

        foreach($penyakit as $key => $value){
            Penyakit::create($value);
        }
    }
}
