<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Produk::create([
            'foto' => 'img/coffee.jpg',
            'nama' => 'Matcha coffee',
            'harga' => '50.000',
            'keterangan' => 'wah gile matcha coffee nya membuat kita sangat amat tenang dan fresh, sangat cocok di minum saat pagi.'
        ]);

        Produk::create([
            'foto' => 'img/cream.jpg',
            'nama' => 'Matcha Cream',
            'harga' => '75.000',
            'keterangan' => 'cream nya lumer banget di mulut dan manis nya pas untuk semua usia.'
        ]);

        Produk::create([
            'foto' => 'img/dounut.jpg',
            'nama' => 'Matcha Dounut',
            'harga' => '40.000',
            'keterangan' => 'raja premium wajib coba karena dounut nya kaya akan rasa matcha dan tekstur nya sangat amat lebut seperti dia.'
        ]);

        Produk::create([
            'foto' => 'img/tea.jpg',
            'nama' => 'Matcha tea',
            'harga' => '35.000',
            'keterangan' => 'matcha tea nya enak banget bikin tenang seperti di pegunungan baksa.'
        ]);
    }
}
