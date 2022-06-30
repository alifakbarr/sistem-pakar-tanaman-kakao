<?php

namespace Database\Seeders;

use App\Models\Ciri;
use Illuminate\Database\Seeder;

class CiriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciri = [
            [
                'kode_ciri' => 'c1',
                'ciri_penyakit' => 'Buah yang terserang masak muda'
            ],
            [
                'kode_ciri' => 'c2',
                'ciri_penyakit' => 'Buah yang terserang bila di goncang tidak berbunyi'
            ],
            [
                'kode_ciri' => 'c3',
                'ciri_penyakit' => 'Bila buah di belah maka akan terlihat tanda – tanda bekas gerekan dan ada larva di dalam buah'
            ],
            [
                'kode_ciri' => 'c4',
                'ciri_penyakit' => 'Bila buah dibelah terlihat biji kehitaman saling melekat satu sama lain'
            ],
            [
                'kode_ciri' => 'c5',
                'ciri_penyakit' => 'Penyakit ini menyerang dengan cara menusuk dan menghisap cairan se'
            ],
            [
                'kode_ciri' => 'c6',
                'ciri_penyakit' => 'Timbul bercak – bercak cekung kecoklatan'
            ],
            [
                'kode_ciri' => 'c7',
                'ciri_penyakit' => 'Serangan pada buah muda menyebabkan kematian sehingga menghambat pembentukan biji'
            ],
            [
                'kode_ciri' => 'c8',
                'ciri_penyakit' => 'Serangan pada ranting dan pucuk menyebabkan kematian'
            ],
            [
                'kode_ciri' => 'c9',
                'ciri_penyakit' => 'Terjadinya bercak bewarna kelabu hitam'
            ],
            [
                'kode_ciri' => 'c10',
                'ciri_penyakit' => 'Batang dan akar membengkak'
            ],
            [
                'kode_ciri' => 'c11',
                'ciri_penyakit' => 'Ranting rapuh bila di patahkan'
            ],
            [
                'kode_ciri' => 'c12',
                'ciri_penyakit' => 'Daun terlihat berubah warna menjadi merah dan rontok'
            ],
            [
                'kode_ciri' => 'c13',
                'ciri_penyakit' => 'Buah memburuk, lebih berkilat dari pada normal'
            ],
            [
                'kode_ciri' => 'c14',
                'ciri_penyakit' => 'Tumbuh Tunas Dari Ketiak, tangkai daun dan cabang'
            ],
            [
                'kode_ciri' => 'c15',
                'ciri_penyakit' => 'Tunas tumbuh lebih banyak dan kasar'
            ],
            [
                'kode_ciri' => 'c16',
                'ciri_penyakit' => 'Tunas bewarna hijau kemudian mati dan bewarna cokelat'
            ],
            [
                'kode_ciri' => 'c17',
                'ciri_penyakit' => 'Tumbuh bunga yang menghasilkan buah berburik tetapi segera mati'
            ],
            [
                'kode_ciri' => 'c18',
                'ciri_penyakit' => 'Buah dewasa mengalami bercak-bercak gelap pada bagian kulit luar bijinya'
            ],
            [
                'kode_ciri' => 'c19',
                'ciri_penyakit' => 'Terdapat bercak gelap dibukit buah'
            ],
            [
                'kode_ciri' => 'c20',
                'ciri_penyakit' => 'Pada buah terdapat infeksi dan menyebabkan buah matang belum saatnya'
            ],
            [
                'kode_ciri' => 'c21',
                'ciri_penyakit' => 'Bercak berkembang dan menutupi seluruh permukaan buah bewarna putih dan jingga'
            ],
            [
                'kode_ciri' => 'c22',
                'ciri_penyakit' => 'Pada musim bunga menyebabkan gugur'
            ],
            [
                'kode_ciri' => 'c23',
                'ciri_penyakit' => 'Di musim dewasa menyebakan adanya bercak kecil yang tidak teratur di daun bewarna hitam
                dan abu-abu'
            ],
        ];

        foreach($ciri as $key => $value){
            Ciri::create($value);
        }
    }
}
