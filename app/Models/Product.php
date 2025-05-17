<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Définir les champs qui peuvent être remplis
    protected $fillable = ['name', 'description', 'price', 'image_url'];
}
