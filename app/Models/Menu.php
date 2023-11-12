<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "type",
        "description",
        "photo"
    ];

    private static $menus = [
        [
            'id' => '1',
            'name' => 'Mango Delight Spread',
            'type' => 'Dessert',
            'description' => 'Indulge in the rich, velvety goodness of our Mango Delight Spread. Perfect for spreading on toast, crackers, or as a delightful addition to your favorite desserts.',
            'photo' => 'images/delightspread.jpeg'
        ],
        [
            'id' => '2',
            'name' => 'Sago Mango Smoothies',
            'type' => 'Drink',
            'description' => 'Experience the refreshing taste of our Sago Mango Smoothies. Packed with the natural sweetness of ripe mangoes and the unique texture of sago pearls, its a tropical delight in every sip.',
            'photo' => 'images/smoothies.jpeg'
        ],
        [
            'id' => '3',
            'name' => 'Mango Infused Sago Pudding',
            'type' => 'Dessert',
            'description' => 'Our Mango Infused Sago Pudding is a harmonious blend of creamy sago pudding infused with the essence of succulent mangoes. A dessert that transports you to the heart of the tropics.',
            'photo' => 'images/pudding.jpeg'
        ],
        [
            'id' => '4',
            'name' => 'Mango Sago Ice Cream',
            'type' => 'Dessert',
            'description' => 'Treat yourself to the creamy indulgence of our Mango Sago Ice Cream. Each scoop is a celebration of the tropical paradise, making it a favorite for mango lovers of all ages.',
            'photo' => 'images/icecream.jpeg'
        ],
    ];

    public static function index()
    {
        return collect(self::$menus);
    }

    public static function showMenu($id){
        return self::index()->firstWhere('id', $id);

    }


}
