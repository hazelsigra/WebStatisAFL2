<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('drinks')->insert([
            'name' => "Single Origin Delight",
            'description' => "Pilih biji kopi single origin favoritmu, nikmati keunikan rasa kopi dari daerah tertentu.",
            'photo' => "kopi1.jpg",
        ]);
        DB::table('drinks')->insert([
            'name' => "Americano",
            'description' => "Espresso yang disajikan dengan air.",
            'photo' => "kopi2.jpeg",
        ]);
        DB::table('drinks')->insert([
            'name' => "Kawoku Signature Blend",
            'description' => "Campuran biji kopi pilihan dengan rasa yang seimbang, memiliki sentuhan cokelat dan sedikit fruity.",
            'photo' => "kopi3.jpg",
        ]);
    }
}


// $index = 0;

//         foreach(Menu::all() as $menu){
//             if($index==0){
//                 DB::table('drinks')->insert([
//                     'name' => "Single Origin Delight",
//                     'description' => "Pilih biji kopi single origin favoritmu, nikmati keunikan rasa kopi dari daerah tertentu.",
//                     'photo' => "kopi1.jpg",
//                     'menu_id' => $menu
//                 ]);
//             } else if($index==1){
//                 DB::table('drinks')->insert([
//                     'name' => "Americano",
//                     'description' => "Espresso yang disajikan dengan air.",
//                     'photo' => "kopi2.jpeg",
//                     'menu_id' => $menu
//                 ]);
//             } else if($index==2){
//                 DB::table('drinks')->insert([
//                     'name' => "Kawoku Signature Blend",
//                     'description' => "Campuran biji kopi pilihan dengan rasa yang seimbang, memiliki sentuhan cokelat dan sedikit fruity.",
//                     'photo' => "kopi3.jpg",
//                     'menu_id' => $menu
//                 ]);
//             }
//             $index++;
//         }