<?php

namespace Database\Seeders;

use App\Models\Olahraga;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OlahragaSeeder extends Seeder
{
    public function run(): void
    {
        $olahragas =  [
            [
                'id' => 'tt1746090',
                'nama' => 'Phyton',
                'sinopsis' => 'Python diciptakan oleh Guido van Rossum pertama kali pada awal tahun 1990-an di Belanda. Bahasa Python terinspirasi dari bahasa pemrograman ABC. Hingga saat ini, Guido masih tetap menjadi penulis utama untuk Python.',
                'tahun' => 2023,
                'category_id' => 1,
                'penemu' => 'Guido van Rossum',
                'foto_sampul' => 'python.jpeg',
            ],
            [
                'id' => 'tt0944947',
                'nama' => 'Karate',
                'sinopsis' => 'Karate berasal dari Okinawa, Jepang, dan berkembang pada awal abad ke-20. Gichin Funakoshi dianggap sebagai tokoh kunci dalam membawa karate dari Okinawa ke Jepang pada tahun 1922. Karate telah menjadi seni bela diri yang diakui secara internasional.',
                'tahun' => 1922,
                'category_id' => 3,
                'penemu' => 'Gichin Funakoshi.',
                'foto_sampul' => 'karate.png',
            ],
            [
                'id' => 'tt0111161',
                'nama' => 'Renang',
                'sinopsis' => 'National Swimming Society didirikan di London, menandai langkah awal dalam mengorganisir dan mengatur olahraga renang. Matthew Webb, pada tahun 1875, memperoleh ketenaran dengan menjadi orang pertama yang berhasil menyeberangi Selat Inggris secara renang.',
                'tahun' => 1837,
                'category_id' => 1,
                'penemu' => 'Tidak ada penemu tunggal.',
                'foto_sampul' => 'renang.png',
            ],
            [
                'id' => 'tt0109830',
                'nama' => 'Basket',
                'sinopsis' => 'Dr. James Naismith menciptakan bola basket sebagai alternatif olahraga dalam ruangan selama musim dingin di Springfield, Massachusetts, Amerika Serikat. Sejak itu, bola basket telah berkembang menjadi salah satu olahraga tim paling populer di dunia, baik untuk pria maupun wanita.',
                'tahun' => 1891,
                'category_id' => 2,
                'penemu' => 'Dr. James Naismith.',
                'foto_sampul' => 'basket.png',
            ],
            [
                'id' => 'tt0108778',
                'nama' => 'Bola Sepak',
                'sinopsis' => 'Asosiasi Sepak Bola (Football Association atau FA) dibentuk di Inggris, dan aturan resmi pertama untuk sepak bola modern disusun. Komite di FA, dengan kontribusi signifikan dari Ebenezer Cobb Morley, mengembangkan aturan tersebut. Sejak itu, sepak bola telah menjadi olahraga paling populer di dunia, dimainkan di berbagai tingkatan dan di berbagai negara.',
                'tahun' => 1863,
                'category_id' => 2,
                'penemu' => 'Tidak ada penemu tunggal.',
                'foto_sampul' => 'bola.png',
            ],
            [
                'id' => 'tt0109831',
                'nama' => 'Badminton',
                'sinopsis' => 'Meskipun badminton memiliki akar sejarah yang panjang, aturan modernnya mulai diatur pada tahun 1873 di Pune, India. Badminton menjadi olahraga raket yang cepat dan dinamis, populer di seluruh dunia, terutama di Asia.',
                'tahun' => 1873,
                'category_id' => 1,
                'penemu' => 'Tidak ada penemu tunggal.',
                'foto_sampul' => 'badminton.png',
            ],
            [
                'id' => 'tt1234567',
                'nama' => 'Tinju',
                'sinopsis' => 'Marquess of Queensberry Rules, aturan modern untuk tinju, diperkenalkan pada tahun 1867 di Inggris. Sejak itu, tinju telah menjadi salah satu olahraga paling menarik dan menantang secara fisik, dengan pertandingan-pertandingan yang memikat perhatian publik di seluruh dunia.',
                'tahun' => 1867,
                'category_id' => 3,
                'penemu' => 'Tidak ada penemu tunggal.',
                'foto_sampul' => 'tinju.png',
            ]
        ];
        foreach ($olahragas as $olahraga) {
            Olahraga::create([
                'id' => $olahraga['id'],
                'nama' => $olahraga['nama'],
                'sinopsis' => $olahraga['sinopsis'],
                'tahun' => $olahraga['tahun'],
                'category_id' => $olahraga['category_id'],
                'penemu' => $olahraga['penemu'],
                'foto_sampul' => $olahraga['foto_sampul'],
            ]);
        }
    }
}
