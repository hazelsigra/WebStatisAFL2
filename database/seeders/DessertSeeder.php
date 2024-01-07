<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DessertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('desserts')->insert([
            'name' => "Homemade Coffee Cake",
            'description' => "Kue lembut dengan aroma kopi yang menggoda, sempurna untuk dipadukan dengan minuman kopi.",
            'photo' => "dessert1.jpg",
        ]);
        DB::table('desserts')->insert([
            'name' => "Avocado Toast with Coffee Infusion",
            'description' => "Roti panggang dengan alpukat segar dan taburan biji kopi, disajikan dengan saus kopi.",
            'photo' => "dessert2.jpg",
        ]);
        DB::table('desserts')->insert([
            'name' => "Coffee Affogato",
            'description' => "Es krim vanilla yang disiram dengan espresso panas.",
            'photo' => "dessert3.jpg",
        ]);
    }
}


// $index = 0;

        // foreach(Menu::all() as $menu){
        //     if($index==0){
        //         DB::table('desserts')->insert([
        //             'name' => "Homemade Coffee Cake",
        //             'description' => "Kue lembut dengan aroma kopi yang menggoda, sempurna untuk dipadukan dengan minuman kopi.",
        //             'photo' => "dessert1.jpg",
        //             'menu_id' => $menu
        //         ]);
        //     } else if($index==1){
                // DB::table('desserts')->insert([
                //     'name' => "Avocado Toast with Coffee Infusion",
                //     'description' => "Roti panggang dengan alpukat segar dan taburan biji kopi, disajikan dengan saus kopi.",
                //     'photo' => "dessert2.jpg",
                //     'menu_id' => $menu
                // ]);
        //     } else if($index==2){
                // DB::table('desserts')->insert([
                //     'name' => "Coffee Affogato",
                //     'description' => "Es krim vanilla yang disiram dengan espresso panas.",
                //     'photo' => "dessert3.jpg",
                //     'menu_id' => $menu
                // ]);
        //     }
        //     $index++;
        // }