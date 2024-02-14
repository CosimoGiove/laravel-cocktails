<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;
    protected $fillable = [ "name",
    "main_alcohol",
    "preparations",
    "glass_type" ,
    "serving_temperature", 
    "garnish",
    "price"];

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }
}
