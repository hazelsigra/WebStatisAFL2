<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "photo"
    ];

    // protected $with = ['drinks', 'desserts'];

    // public function drinks() : HasMany {
    //     return $this->hasMany(Drink::class);
    // }

    // public function desserts() : HasMany {
    //     return $this->hasMany(Dessert::class);
    // }
}
