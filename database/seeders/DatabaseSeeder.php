<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Menu::create([
            'id' => '1',
            'name' => 'Kastangel',
            'type' => 'Kue Kering',
            'description' => 'Kastengel adalah kue kering yang memiliki adonan utama berupa terigu, telur, margarin dan parutan keju.',
            'photo' => 'kastangel.jpg'
        ]);

        \App\Models\Menu::create([
            'id' => '2',
            'name' => 'Nastar',
            'type' => 'Kue Kering',
            'description' => 'Nastar adalah kue kering dari adonan tepung terigu, mentega, dan telur yang diisi dengan selai nanas, cokelat, maupun rasa lainnya.',
            'photo' => 'nastar.jpg'
        ]);

        \App\Models\Menu::create([
            'id' => '3',
            'name' => 'Raisin',
            'type' => 'Kue Kering',
            'description' => 'Raisin merupakan jenis kismis yang paling sering kita jumpai diresep makanan pada umumnya.',
            'photo' => 'raisin.jpg'
        ]);

        \App\Models\Menu::create([
            'id' => '4',
            'name' => 'Sagu Keju',
            'type' => 'Kue Kering',
            'description' => 'Sagu keju adalah kue kering klasik berbahan dasar tepung sagu dan keju.',
            'photo' => 'sagukeju.jpg'
        ]);

        \App\Models\Menu::create([
            'id' => '5',
            'name' => 'Coklat Almond',
            'type' => 'Kue Kering',
            'description' => 'Resep kue kering coklat almon ala rumahan yang sederhana dan lezat dari komunitas memasak terbesar dunia.',
            'photo' => 'coklatalmond.jpg'
        ]);
    }
}
