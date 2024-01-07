<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            'name' => "Single Origin Delight",
            'description' => "Pilih biji kopi single origin favoritmu, nikmati keunikan rasa kopi dari daerah tertentu.",
            'photo' => "kopi1.jpg",
        ]);
        DB::table('menus')->insert([
            'name' => "Americano",
            'description' => "Espresso yang disajikan dengan air.",
            'photo' => "kopi2.jpeg",
        ]);
        DB::table('menus')->insert([
            'name' => "Kawoku Signature Blend",
            'description' => "Campuran biji kopi pilihan dengan rasa yang seimbang, memiliki sentuhan cokelat dan sedikit fruity.",
            'photo' => "kopi3.jpg",
        ]);
        DB::table('menus')->insert([
            'name' => "Homemade Coffee Cake",
            'description' => "Kue lembut dengan aroma kopi yang menggoda, sempurna untuk dipadukan dengan minuman kopi.",
            'photo' => "dessert1.jpg",
        ]);
        DB::table('menus')->insert([
            'name' => "Avocado Toast with Coffee Infusion",
            'description' => "Roti panggang dengan alpukat segar dan taburan biji kopi, disajikan dengan saus kopi.",
            'photo' => "dessert2.jpg",
        ]);
        DB::table('menus')->insert([
            'name' => "Coffee Affogato",
            'description' => "Es krim vanilla yang disiram dengan espresso panas.",
            'photo' => "dessert3.jpg",
        ]);
    }
}
