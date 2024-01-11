<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nama_kategori' => 'Olahraga-Individu',
                'keterangan' => 'Olahraga Low-level'
            ],
            [
                'nama_kategori' => 'Olahraga-Tim',
                'keterangan' => 'Olahraga Middle-level'
            ],
            [
                'nama_kategori' => 'Olahraga-Beladiri',
                'keterangan' => 'Olahraga High-level'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
