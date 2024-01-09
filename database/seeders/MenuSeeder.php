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
            'name' => "Kastangel",
            'description' => "Kastengel adalah kue kering yang memiliki adonan utama berupa terigu, telur, margarin dan parutan keju.",
            'photo' => "kastangel.jpg",
        ]);
        DB::table('menus')->insert([
            'name' => "Nastar",
            'description' => "Nastar adalah kue kering dari adonan tepung terigu, mentega, dan telur yang diisi dengan selai nanas, cokelat, maupun rasa lainnya.",
            'photo' => "nastar.jpg",
        ]);
        DB::table('menus')->insert([
            'name' => "Raisin",
            'description' => "Raisin merupakan jenis kismis yang paling sering kita jumpai diresep makanan pada umumnya.",
            'photo' => "raisin.jpg",
        ]);
        DB::table('menus')->insert([
            'name' => "Sagu Keju",
            'description' => "Sagu keju adalah kue kering klasik berbahan dasar tepung sagu dan keju.",
            'photo' => "sagukeju.jpg",
        ]);
        DB::table('menus')->insert([
            'name' => "Coklat Almond",
            'description' => "Resep kue kering coklat almon ala rumahan yang sederhana dan lezat dari komunitas memasak terbesar dunia.",
            'photo' => "coklatalmond.jpg",
        ]);
    }
}
