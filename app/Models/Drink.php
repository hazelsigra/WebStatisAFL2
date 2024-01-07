<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drink extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "photo"
    ];

    // public function menu() : BelongsTo {
    //     return $this->belongsTo(Menu::class);
    // }
}
